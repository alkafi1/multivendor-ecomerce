
@extends('layouts.Admin-layout.adminapp')
@section('admin_content')
    <div class="card shadow-sm radius-19 border mb-3">
        <div class="card-title p-5">
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                {{ __('Welcome to Admin Dashboard') }}
            </h2>
        </div>
        <div class="card-body">
            <div class="py-5">
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    <div class="bg-white  overflow-hidden  sm:rounded-lg">
                        <div class="pb-6 text-gray-900">
                            Thank You {{Auth::guard('admin')->user()->name }} For  {{ __("You're logged in!") }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
