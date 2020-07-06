<?php 

	namespace App\Models;
	use Illuminate\Database\Eloquent\Model;

	/**
	 * 
	 */
	class Category extends Model
	{
		
		Protected $table  = 'category';
		Protected $fillable = ['name','status'];
		
	}
	
 ?>