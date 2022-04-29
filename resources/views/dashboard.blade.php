<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
        <div class="container py-5">
            <div class="row">
                <div class="colo-md-12">
                    <div id="success_message">
    
                    </div>
                    <div class="card">
                        <a class="btn btn-primary" href="{{route('product')}}" role="button">Products</a>
                        {{-- <div class="card-header">
                            <h4>Student Data
    
                                <button type="button" class="btn btn-primary float-end btn-sm" data-bs-toggle="modal"
                                    data-bs-target="#AddStudentModel">
                                    Add Student
                                </button>
                            </h4>
                        </div> --}}
                        {{-- <div class="card-body">
                            <table class="table table-bordered table-striped">
                                <thead>
                                    <th>ID</th>
                                    <th>Photo</th>
                                    <th>ProssdName</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Course</th>
                                    <th>Edit</th>
                                    <th>Delete</th>
                                </thead>
                                <tbody>
    
                                </tbody>
                            </table>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </x-slot>
  
    

    
</x-app-layout>
