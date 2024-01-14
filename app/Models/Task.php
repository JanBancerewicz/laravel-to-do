<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Testing\Exceptions\InvalidArgumentException;
use Illuminate\Support\Str;


/**
 * Task model.
 * 
 * @property string $title
 * @property string $idToken
 * @property string $content
 * @property string $status
 */
class Task extends Model
{
    use HasFactory;

    protected const AVAILABLE_STATUSES =[
        'Active' => 'active',
        'Completed' => 'completed'
    ];

    protected $fillable = [
        'title', 'idToken', 'content', 'status'
    ];

    protected $attributes =[
        'content' => '',
        'status' => self::AVAILABLE_STATUSES['Active']
    ];

    public static function getStatus(string $key){
        if(!array_key_exists($key, self::AVAILABLE_STATUSES)){
            throw new InvalidArgumentException(
                sprintf("Status for key [%s] does not exist.", $key)
            );
        }

        return self::AVAILABLE_STATUSES[$key];
    }

    public static function getAvailableStatuses(bool $keys = false){
        if($keys){
            return array_keys(self::AVAILABLE_STATUSES);
            
        }
        
        return array_values(self::AVAILABLE_STATUSES);
    } 


    public function getRouteKeyName(){
        return "idToken";
    }

    public function setIdToken(string $idToken)
    {
        $taskIdToken = Str::slug($idToken);
        $matchingTokens = Task::select('idToken')
            ->where('idToken', "LIKE", "$taskIdToken%")->get();

        if($matchingTokens->isNotEmpty()){
            $matchingCount = $matchingTokens->count();
            $taskIdToken = Str::slug("{$taskIdToken}-{$matchingCount}");
        }

        // $this->attributes['idToken'] = Str::slug($idToken);
        return Str::slug($taskIdToken);
    }

    public function matchStatus(string $key){
        return ($this->status == self::getStatus($key));
    }

    protected static function boot()
    {
        parent::boot();

        static::creating(function(Task $task){
            $task->idToken = $task->setIdToken($task->title);
        });

        static::updating(function(Task $task){
            $task->idToken = $task->setIdToken($task->title);
        });
    }
}
