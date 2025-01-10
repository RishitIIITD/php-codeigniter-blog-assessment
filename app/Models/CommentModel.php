<?php namespace App\Models;

use CodeIgniter\Model;

class CommentModel extends Model{
    // Always specify the table and the primary key of the table
    protected $table = 'comments';
    protected $primaryKey = 'id';

    // List of fields that can be manipulated by an outside class (Can be updated from a user form)
    protected $allowedFields = ['blog_id', 'name', 'email', 'comment'];

    protected $useTimestamps = false;
    protected $createdField = 'created_at';
}