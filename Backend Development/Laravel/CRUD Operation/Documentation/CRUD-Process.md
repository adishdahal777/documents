# Laravel Normal CRUD

Open Terminal and CD to desired Location

```php
composer create laravel/laravel:^10 LaravelCRUD

cd LaravelCRUD/

code .
```

Configure the **.env** file

```php

APP_NAME='CRUD on Laravel with Ajax and Normal' #as you wish

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=laravelCrud #as you with
DB_USERNAME=root #according to your database
DB_PASSWORD=pass        #if there is any preveligae on the database
```

Now Serve the Project

```php
php artisan serve

php artisan migrate #in new terminal
```

Setting Up Authentication ( Login / Registration )

```php
composer require laravel/breeze --dev

php artisan breeze:install

 ┌ Which Breeze stack would you like to install? ───────────────┐
 │ Blade with Alpine                                            │
 └──────────────────────────────────────────────────────────────┘

 ┌ Would you like dark mode support? ───────────────────────────┐
 │ No                                                           │
 └──────────────────────────────────────────────────────────────┘

 ┌ Which testing framework do you prefer? ──────────────────────┐
 │ PHPUnit                                                      │
 └──────────────────────────────────────────────────────────────┘
 
php artisan migrate
npm install
npm run dev #Run this command in a terminal and leave it
```

Create a Controller Name **UserController**.

```php
php artisan make:controller UserController
```

In **web.php**

```php
use App\Http\Controllers\UserController;

Route::middleware('auth')->group(function () {

      //For the CRUD
    Route::get('/details', [UserController::class, 'index'])->name('details.index');
    Route::get('/details/create', [UserController::class, 'create'])->name('details.create');
    Route::post('/details/store', [UserController::class, 'store'])->name('details.store');
    		
		//Routes Created by Breeze
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
```

In UserController.php

```php
<?php

namespace App\Http\Controllers;

use App\Models\Detail;
use Illuminate\Http\Request;

class UserController extends Controller
{
	
	  public function index(Request $request)
    {
        $details = Detail::orderBy('id', 'desc')->get();
        return view('details.details', compact('details'));
    }
    
    public function create()
    {
        return view('details.create');
    }
    
}
```

Create a new folder inside the **view → details**

Inside **details** create a file 

**details.blade.php**

**create.blade.php**

In the **details.blade.php**

```php
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Details') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h1 class="text-lg font-bold text-center uppercase"> List of Details </h1>
                    <a href="{{ route('details.create') }}" class="text-blue-700 hover:text-blue-800 ml-2">Create a new
                        Detail</a>
                </div>
                <div class="px-6 ">
                    @if (session('success'))
                        <div class="p-4 bg-green-100 border-l-4 border-green-400 rounded-b text-green-700">
                            <strong>{{ session('success') }}</strong>
                        </div>
                    @endif
                    @if (session('unsuccess'))
                        <div class="p-4 bg-red-100 border-l-4 border-red-400 rounded-b text-red-700">
                            <strong>{{ session('unsuccess') }}</strong>
                        </div>
                    @endif
                </div>
                <div class="p-6">

                </div>
            </div>
        </div>
    </div>
```

In the **create.blade.php** 

Code Structure for the form

```php
  <x-app-layout>
     <x-slot name="header">
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
          {{ __('Create a new Detail') }}
      </h2>
      <a href="{{ route('details.index') }}" class="text-blue-700 hover:text-blue-800">Go Back</a>
    </x-slot>
		  <div class="py-12">
		        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
		            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
		                <div class="p-6 text-gray-900">
		                    <h1 class="text-lg font-bold text-center uppercase"> Laravel CRUD </h1>
		                </div>
		                <div class="p-6">
		                    <form action="{{ route('details.store') }}" method="POST" class="space-y-4">
		                        @csrf
		                        <div>
		                            <label for="name">Name</label>
		                            <input type="text" name="name" id="name" placeholder="Enter your full name"
		                                class="w-full px-4 py-2 mt-1 text-gray-900 bg-white border rounded-md focus:outline-none focus:shadow-outline">
		                        </div>
		
		                        <div>
		                            <label for="email">Email</label>
		                            <input type="email" name="email" id="email" placeholder="Enter your  Email"
		                                class="w-full px-4 py-2 mt-1 text-gray-900 bg-white border rounded-md focus:outline-none focus:shadow-outline">
		                        </div>
		
		
		                        <div>
		                            <label for="phonenumber">Phone Number</label>
		                            <input type="number" name="phonenumber" id="phonenumber"
		                                placeholder="Enter your full Phone Number"
		                                class="w-full px-4 py-2 mt-1 text-gray-900 bg-white border rounded-md focus:outline-none focus:shadow-outline">
		                        </div>
		
		                        <div>
		                            <label for="address">Address</label>
		                            <input type="text" name="address" id="address" placeholder="Enter your  address"
		                                class="w-full px-4 py-2 mt-1 text-gray-900 bg-white border rounded-md focus:outline-none focus:shadow-outline">
		                        </div>
		
		                        <div>
		                            <label for="gender">Gender</label>
		                            <div class="flex space-x-3">
		                                <div class="">
		                                    <input type="radio" name="gender" id="male" value="male"
		                                        class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500">
		                                    <label for="male" class="ml-2">Male</label>
		                                </div>
		                                <div class="">
		                                    <input type="radio" name="gender" id="female" value="female"
		                                        class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500">
		                                    <label for="female" class="ml-2">Female</label>
		                                </div>
		                            </div>
		                        </div>
		
		
		                        <div>
		                            <label for="blood_group">Blood Group</label>
		                            <select name="blood_group" id="blood_group"
		                                class="w-full px-4 py-2 mt-1 text-gray-900 bg-white border rounded-md focus:outline-none focus:shadow-outline">
		                                <option value="">Select Blood Group</option>
		                                <option value="A+">A+</option>
		                                <option value="A-">A-</option>
		                                <option value="B+">B+</option>
		                                <option value="B-">B-</option>
		                                <option value="O+">O+</option>
		                                <option value="O-">O-</option>
		                                <option value="AB+">AB+</option>
		                            </select>
		                        </div>
		                        <div class="flex space-x-5">
		                            <button type="submit"
		                                class="w-full px-4 py-2 mt-1 text-white bg-blue-700 border border-transparent rounded-md hover:bg-blue-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
		                                Save
		                            </button>
		                            <button type="reset"
		                                class="w-full px-4 py-2 mt-1 text-white bg-gray-700 border border-transparent rounded-md hover:bg-gray-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-500">
		                                Reset
		                            </button>
		                        </div>
		                    </form>
		                </div>
		            </div>
		        </div>
		    </div>
    </x-app-layout>
```

Now Create a Migration and Model.

```php
php artisan make:model Detail -m
```

In Migration.

```php
public function up(): void
{
  Schema::create('details', function (Blueprint $table) {
      $table->id();
      $table->string('name');
      $table->string('email');
      $table->string('phonenumber');
      $table->string('address');
      $table->string('gender');
      $table->string('blood_group');
      $table->timestamps();
  });
}
```

Run: 

```php
php artisan migrate
```

Update **UserController.php** after the create() function ends.

```php
  public function store(Request $request)
    {

        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:details,email',
            'phonenumber' => 'required|unique:details,phonenumber',
            'address' => 'required',
            'gender' => 'required',
            'blood_group' => 'required',
        ]);

        $detail = new Detail();

        $detail->name = $request->name;
        $detail->email = $request->email;
        $detail->phonenumber = $request->phonenumber;
        $detail->address = $request->address;
        $detail->gender = $request->gender;
        $detail->blood_group = $request->blood_group;
        if ($detail->save()) {
            return redirect()->route('details.index')->with(['success' => 'Detail saved successfully']);
        } else {
            return redirect()->route('details.index')->with(['unsuccess' => 'Detail not saved']);
        }
    }
```

Updated HTML part for the form validation ( **create.blade.php** )

```php
<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Create a new Detail') }}
        </h2>
        <a href="{{ route('details.index') }}" class="text-blue-700 hover:text-blue-800">Go Back</a>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h1 class="text-lg font-bold text-center uppercase"> Laravel CRUD </h1>
                </div>
                <div class="px-6 ">
                    @if (session('success'))
                        <div class="p-4 bg-green-100 border-l-4 border-green-400 rounded-b text-green-700">
                            <strong>{{ session('success') }}</strong>
                        </div>
                    @endif
                    @if (session('unsuccess'))
                        <div class="p-4 bg-red-100 border-l-4 border-red-400 rounded-b text-red-700">
                            <strong>{{ session('unsuccess') }}</strong>
                        </div>
                    @endif
                </div>
                <div class="p-6">
                    <form action="{{ route('details.store') }}" method="POST" class="space-y-4">
                        @csrf
                        <div>
                            <label for="name">Name</label>
                            <input type="text" name="name" id="name" placeholder="Enter your full name"
                                value="{{ old('name') }}"
                                class="w-full px-4 py-2 mt-1 text-gray-900 bg-white border @error('name') border-red-500 @enderror rounded-md focus:outline-none focus:shadow-outline">
                            @error('name')
                                <p class="text-red-500">{{ $message }}</p>
                            @enderror
                        </div>

                        <div>
                            <label for="email">Email</label>
                            <input type="email" name="email" id="email" placeholder="Enter your  Email"
                                value="{{ old('email') }}"
                                class="w-full px-4 py-2 mt-1 text-gray-900 bg-white border @error('email') border-red-500 @enderror rounded-md focus:outline-none focus:shadow-outline">
                            @error('email')
                                <p class="text-red-500">{{ $message }}</p>
                            @enderror
                        </div>

                        <div>
                            <label for="phonenumber">Phone Number</label>
                            <input type="number" name="phonenumber" id="phonenumber" value="{{ old('phonenumber') }}"
                                placeholder="Enter your full Phone Number"
                                class="w-full px-4 py-2 mt-1 text-gray-900 bg-white border @error('phonenumber') border-red-500 @enderror rounded-md focus:outline-none focus:shadow-outline">
                            @error('phonenumber')
                                <p class="text-red-500">{{ $message }}</p>
                            @enderror
                        </div>

                        <div>
                            <label for="address">Address</label>
                            <input type="text" name="address" id="address" placeholder="Enter your  address"
                                value="{{ old('address') }}"
                                class="w-full px-4 py-2 mt-1 text-gray-900 bg-white border @error('address') border-red-500 @enderror rounded-md focus:outline-none focus:shadow-outline">
                            @error('address')
                                <p class="text-red-500">{{ $message }}</p>
                            @enderror
                        </div>

                        <div>
                            <label for="gender">Gender</label>
                            <div class="flex space-x-3">
                                <div class="">
                                    <input type="radio" name="gender" id="male" value="male"
                                        @if (old('gender') == 'male') checked @endif
                                        class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500">
                                    <label for="male" class="ml-2">Male</label>
                                </div>
                                <div class="">
                                    <input type="radio" name="gender" id="female" value="female"
                                        @if (old('gender') == 'female') checked @endif
                                        class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500">
                                    <label for="female" class="ml-2">Female</label>
                                </div>
                            </div>
                            @error('gender')
                                <p class="text-red-500">{{ $message }}</p>
                            @enderror
                        </div>

                        <div>
                            <label for="blood_group">Blood Group</label>
                            <select name="blood_group" id="blood_group"
                                class="w-full px-4 py-2 mt-1 text-gray-900 bg-white border @error('blood_group') border-red-500 @enderror rounded-md focus:outline-none focus:shadow-outline">
                                <option value="">Select Blood Group</option>
                                <option value="A+" @if (old('blood_group') == 'A+') selected @endif>A+</option>
                                <option value="A-" @if (old('blood_group') == 'A-') selected @endif>A-</option>
                                <option value="B+" @if (old('blood_group') == 'B+') selected @endif>B+</option>
                                <option value="B-" @if (old('blood_group') == 'B-') selected @endif>B-</option>
                                <option value="O+" @if (old('blood_group') == 'O+') selected @endif>O+</option>
                                <option value="O-" @if (old('blood_group') == 'O-') selected @endif>O-</option>
                                <option value="AB+" @if (old('blood_group') == 'AB+') selected @endif>AB+</option>
                            </select>
                            @error('blood_group')
                                <p class="text-red-500">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="flex space-x-5">
                            <button type="submit"
                                class="w-full px-4 py-2 mt-1 text-white bg-blue-700 border border-transparent rounded-md hover:bg-blue-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                                Save
                            </button>
                            <button type="reset"
                                class="w-full px-4 py-2 mt-1 text-white bg-gray-700 border border-transparent rounded-md hover:bg-gray-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-500">
                                Reset
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>

```

Showing the data in the table.

Update **details.blade.php**

```php
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Details') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h1 class="text-lg font-bold text-center uppercase"> List of Details </h1>
                </div>
                <div class="px-6 ">
                    @if (session('success'))
                        <div class="p-4 bg-green-100 border-l-4 border-green-400 rounded-b text-green-700">
                            <strong>{{ session('success') }}</strong>
                        </div>
                    @endif
                    @if (session('unsuccess'))
                        <div class="p-4 bg-red-100 border-l-4 border-red-400 rounded-b text-red-700">
                            <strong>{{ session('unsuccess') }}</strong>
                        </div>
                    @endif
                </div>
                <div class="p-6">
                    {{-- Table for the details inserted --}}

                    <table class="table-auto w-full border">
                        <thead>
                            <tr class="bg-gray-100">
                                <th colspan="7" class="px-4 py-2 text-left text-sm font-semibold text-gray-900">
                                    <a href="{{ route('details.create') }}"
                                        class="text-blue-700 hover:text-blue-800">Create a new
                                        Detail</a>
                                </th>
                            </tr>
                            <tr class="bg-gray-100">
                                <th class="px-4 py-2 text-left text-sm font-semibold text-gray-900">Name</th>
                                <th class="px-4 py-2 text-left text-sm font-semibold text-gray-900">Email</th>
                                <th class="px-4 py-2 text-left text-sm font-semibold text-gray-900">Phone Number</th>
                                <th class="px-4 py-2 text-left text-sm font-semibold text-gray-900">Address</th>
                                <th class="px-4 py-2 text-left text-sm font-semibold text-gray-900">Gender</th>
                                <th class="px-4 py-2 text-left text-sm font-semibold text-gray-900">Blood Group</th>
                                <th class="px-4 py-2 text-left text-sm font-semibold text-gray-900">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($details as $detail)
                                <tr class="bg-white border-b">
                                    <td class="px-4 py-2 text-sm text-gray-900">{{ $detail->name }}</td>
                                    <td class="px-4 py-2 text-sm text-gray-900">{{ $detail->email }}</td>
                                    <td class="px-4 py-2 text-sm text-gray-900">{{ $detail->phonenumber }}</td>
                                    <td class="px-4 py-2 text-sm text-gray-900">{{ $detail->address }}</td>
                                    <td class="px-4 py-2 text-sm text-gray-900">{{ $detail->gender }}</td>
                                    <td class="px-4 py-2 text-sm text-gray-900">{{ $detail->blood_group }}</td>
                                    <td class="px-4 py-2 text-sm text-gray-900">
                                        <a href="{{ route('details.delete', $detail->id) }}"
                                            class="text-red-700 hover:text-red-800">Delete</a>
                                        <a href="{{ route('details.edit', $detail->id) }}"
                                            class="text-blue-700 hover:text-blue-800">Edit</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>

```

Add Routes in **web.php**

```php
 // For Delete
    Route::get('/details/delete/{id}', [UserController::class, 'delete'])->name('details.delete'); //Dynamic Routing
    // For Edit
    Route::get('/details/edit/{id}', [UserController::class, 'edit'])->name('details.edit'); //Dynamic Routing
    Route::post('/details/update/{id}', [UserController::class, 'update'])->name('details.update'); //Dynamic Routing
```

Update the functions in the **UserController**.

```php
    public function delete($id)
    {
        $detail = Detail::where('id', $id)->first();
        if ($detail) {
            $detail->delete();
            return redirect()->route('details.index')->with(['success' => 'Detail deleted successfully']);
        } else {
            return redirect()->route('details.index')->with(['unsuccess' => 'Detail not deleted']);
        }
    }

    public function edit($id)
    {
        $detail = Detail::where('id', $id)->first();
        if ($detail) {
            return view('details.edit', compact('detail'))->with(['success' => 'Data Found']);;
        } else {
            return redirect()->route('details.index')->with(['unsuccess' => 'Data not Found']);
        }
    }

    public function update($id)
    {

        request()->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phonenumber' => 'required',
            'address' => 'required',
            'gender' => 'required',
            'blood_group' => 'required',
        ]);

        $detail = Detail::where('id', $id)->first();
        if ($detail) {
            $detail->name = request('name');
            $detail->email = request('email');
            $detail->phonenumber = request('phonenumber');
            $detail->address = request('address');
            $detail->gender = request('gender');
            $detail->blood_group = request('blood_group');
            if ($detail->save()) {
                return redirect()->route('details.index')->with(['success' => 'Detail updated successfully']);
            } else {
                return redirect()->route('details.edit', $id)->with(['unsuccess' => 'Detail not updated']);
            }
        } else {
            return redirect()->route('details.index')->with(['unsuccess' => 'Detail not found']);
        }
    }
```

Create a new file **edit.blade.php** inside view/details

```php
<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit an existing Detail') }}
        </h2>
        <a href="{{ route('details.index') }}" class="text-blue-700 hover:text-blue-800">Go Back</a>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h1 class="text-lg font-bold text-center uppercase"> Laravel CRUD </h1>
                </div>
                <div class="px-6 ">
                    @if (session('success'))
                        <div class="p-4 bg-green-100 border-l-4 border-green-400 rounded-b text-green-700">
                            <strong>{{ session('success') }}</strong>
                        </div>
                    @endif
                    @if (session('unsuccess'))
                        <div class="p-4 bg-red-100 border-l-4 border-red-400 rounded-b text-red-700">
                            <strong>{{ session('unsuccess') }}</strong>
                        </div>
                    @endif
                </div>
                <div class="p-6">
                    <form action="{{ route('details.update', $detail->id) }}" method="POST" class="space-y-4">
                        @csrf
                        <div>
                            <label for="name">Name</label>
                            <input type="text" name="name" id="name" placeholder="Enter your full name"
                                value="{{ $detail->name }}"
                                class="w-full px-4 py-2 mt-1 text-gray-900 bg-white border @error('name') border-red-500 @enderror rounded-md focus:outline-none focus:shadow-outline">
                            @error('name')
                                <p class="text-red-500">{{ $message }}</p>
                            @enderror
                        </div>

                        <div>
                            <label for="email">Email</label>
                            <input type="email" name="email" id="email" placeholder="Enter your  Email"
                                value="{{ $detail->email }}"
                                class="w-full px-4 py-2 mt-1 text-gray-900 bg-white border @error('email') border-red-500 @enderror rounded-md focus:outline-none focus:shadow-outline">
                            @error('email')
                                <p class="text-red-500">{{ $message }}</p>
                            @enderror
                        </div>

                        <div>
                            <label for="phonenumber">Phone Number</label>
                            <input type="number" name="phonenumber" id="phonenumber" value="{{ $detail->phonenumber }}"
                                placeholder="Enter your full Phone Number"
                                class="w-full px-4 py-2 mt-1 text-gray-900 bg-white border @error('phonenumber') border-red-500 @enderror rounded-md focus:outline-none focus:shadow-outline">
                            @error('phonenumber')
                                <p class="text-red-500">{{ $message }}</p>
                            @enderror
                        </div>

                        <div>
                            <label for="address">Address</label>
                            <input type="text" name="address" id="address" placeholder="Enter your  address"
                                value="{{ $detail->address }}"
                                class="w-full px-4 py-2 mt-1 text-gray-900 bg-white border @error('address') border-red-500 @enderror rounded-md focus:outline-none focus:shadow-outline">
                            @error('address')
                                <p class="text-red-500">{{ $message }}</p>
                            @enderror
                        </div>

                        <div>
                            <label for="gender">Gender</label>
                            <div class="flex space-x-3">
                                <div class="">
                                    <input type="radio" name="gender" id="male" value="male"
                                        @if ($detail->gender == 'male') checked @endif
                                        class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500">
                                    <label for="male" class="ml-2">Male</label>
                                </div>
                                <div class="">
                                    <input type="radio" name="gender" id="female" value="female"
                                        @if ($detail->gender == 'female') checked @endif
                                        class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500">
                                    <label for="female" class="ml-2">Female</label>
                                </div>
                            </div>
                            @error('gender')
                                <p class="text-red-500">{{ $message }}</p>
                            @enderror
                        </div>

                        <div>
                            <label for="blood_group">Blood Group</label>
                            <select name="blood_group" id="blood_group"
                                class="w-full px-4 py-2 mt-1 text-gray-900 bg-white border @error('blood_group') border-red-500 @enderror rounded-md focus:outline-none focus:shadow-outline">
                                <option value="">Select Blood Group</option>
                                <option value="A+" @if ($detail->blood_group == 'A+') selected @endif>A+</option>
                                <option value="A-" @if ($detail->blood_group == 'A-') selected @endif>A-</option>
                                <option value="B+" @if ($detail->blood_group == 'B+') selected @endif>B+</option>
                                <option value="B-" @if ($detail->blood_group == 'B-') selected @endif>B-</option>
                                <option value="O+" @if ($detail->blood_group == 'O+') selected @endif>O+</option>
                                <option value="O-" @if ($detail->blood_group == 'O-') selected @endif>O-</option>
                                <option value="AB+" @if ($detail->blood_group == 'AB+') selected @endif>AB+</option>
                            </select>
                            @error('blood_group')
                                <p class="text-red-500">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="flex space-x-5">
                            <button type="submit"
                                class="w-full px-4 py-2 mt-1 text-white bg-blue-700 border border-transparent rounded-md hover:bg-blue-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                                Save
                            </button>
                            <button type="reset"
                                class="w-full px-4 py-2 mt-1 text-white bg-gray-700 border border-transparent rounded-md hover:bg-gray-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-500">
                                Reset
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>

```

Simple Laravel CRUD has been completed. Now The Same CRUD with ajax