<?php
namespace App\Http\Requests;
use Illuminate\Foundation\Http\FormRequest;
class UpdateProductRequest extends FormRequest
{
 /**
 * Determine if the user is authorized to make this request.
 */
 public function authorize(): bool
 {
 return true;
 }

 public function rules(): array
 {
 return [
 'code' => 
'required|string|max:50|unique:products,code,'.$this->product->id,
 'name' => 'required|string|max:250',
 'quantity' => 'required|integer|min:1|max:10000',
 'price' => 'required',
 'description' => 'nullable|string'
 ];
 }
}