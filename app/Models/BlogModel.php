<?php namespace App\Models;

use CodeIgniter\Model;

class BlogModel extends Model{
    // Always specify the table and the primary key of the table
    protected $table = 'posts';
    protected $primaryKey = 'post_id';

    // List of fields that can be manipulated by an outside class (Can be updated from a user form)
    protected $allowedFields = ["post_title", "post_content", "post_author"];

    protected $useTimestamps = true;
    protected $createdField = 'post_created_at';
    protected $updatedField = "post_updated_at";
}