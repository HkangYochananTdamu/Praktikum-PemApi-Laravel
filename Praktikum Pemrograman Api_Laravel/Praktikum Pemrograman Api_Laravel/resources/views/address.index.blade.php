<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body style="background: lightgray">

    <div class="container mt-5 mb-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card border-0 shadow-sm rounded">
                    <div class="card-body">
                        <form action="{{ route('addresses.store') }}" method="POST" enctype="multipart/form-data">
                        
                            @csrf
    
                            <div class="form-group mb-3">
                                <label class="font-weight-bold">Street</label>
                                <input type="text" class="form-control @error('street') is-invalid @enderror" name="street" value="{{ old('street') }}" placeholder="Enter Street">
                                
                                <!-- error message for street -->
                                @error('street')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            
                            <div class="form-group mb-3">
                                <label class="font-weight-bold">City</label>
                                <input type="text" class="form-control @error('city') is-invalid @enderror" name="city" value="{{ old('city') }}" placeholder="Enter City">
                                
                                <!-- error message for city -->
                                @error('city')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group mb-3">
                                <label class="font-weight-bold">Province</label>
                                <input type="text" class="form-control @error('province') is-invalid @enderror" name="province" value="{{ old('province') }}" placeholder="Enter Province">
                                
                                <!-- error message for province -->
                                @error('province')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group mb-3">
                                <label class="font-weight-bold">Country</label>
                                <input type="text" class="form-control @error('country') is-invalid @enderror" name="country" value="{{ old('country') }}" placeholder="Enter Country">
                                
                                <!-- error message for country -->
                                @error('country')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group mb-3">
                                <label class="font-weight-bold">Postal Code</label>
                                <input type="text" class="form-control @error('postal_code') is-invalid @enderror" name="postal_code" value="{{ old('postal_code') }}" placeholder="Enter Postal Code">
                                
                                <!-- error message for postal_code -->
                                @error('postal_code')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
    
                            <button type="submit" class="btn btn-md btn-primary me-3">Save</button>
                            <button type="reset" class="btn btn-md btn-warning">Reset</button>
    
                        </form> 
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.ckeditor.com/4.13.1/standard/ckeditor.js"></script>
    <script>
        CKEDITOR.replace( 'description' );
    </script>
</body>
</html>
