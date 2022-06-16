<?php
 namespace App\Models;
 use Illuminate\Database\Eloquent\Model;
 class Userjob extends Model{
 protected $table = 'tbluserjob';
 // column sa table
 protected $fillable = [
 'username', 'password', 'gender', 'jobid'
 ];
 public $timestamps = false;
 
 
 }