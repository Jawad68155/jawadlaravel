@include("components.header")
<div class="container-fluid pt-4 px-4">
                <div class="row vh-100 bg-light rounded mx-0">
                    <div class="col-md-12">
                        <h3>category page</h3>
                  
               
            <form method="post" enctype="multipart/form-data">
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">name</label>
                                    <input type="text" name="cname" class="form-control" id="exampleInputEmail1"
                                        aria-describedby="emailHelp">
                                   
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputPassword1" class="form-label">image</label>
                                    <input type="file" name="cimage" class="form-control" id="exampleInputPassword1">
                                </div>
                                <div class="mb-3 form-check">
                                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                                </div>
                                <button type="submit" class="btn btn-primary">submit</button>
                            </form>
                         </div>
                         </div>
                
                        </div>

@include("components.footer")