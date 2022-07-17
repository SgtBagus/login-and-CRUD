<?php
  include('template/header.php');
?>
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-12">
                <div class="card my-4">
                    <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                        <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                            <h6 class="text-white text-capitalize ps-3">User Form</h6>
                        </div>
                    </div>
                    <div class="card-body px-0 pb-2">
                        <div class="table-responsive p-0">
                            <div class="card-body">
                                <form action="./system/input_user.php" method="POST">
                                    <div class="input-group input-group-outline mb-3">
                                        <input type="text" name="name" class="form-control" placeholder="Name">
                                    </div>
                                    <div class="input-group input-group-outline mb-3">
                                        <input type="email" name="email" class="form-control" placeholder="Email">
                                    </div>
                                    <div class="input-group input-group-outline mb-3">
                                        <input type="password" name="password" class="form-control" placeholder="Password">
                                    </div>
                                    <div class="form-check form-check-info text-start ps-0">
                                        <input class="form-check-input" name="login_func" type="checkbox" id="flexCheckDefault" value="true">
                                        <label class="form-check-label" for="flexCheckDefault">
                                            Login Function
                                        </label>
                                    </div>
                                    <button type="submit" class="btn btn-lg bg-gradient-primary btn-lg w-100 mt-4 mb-0">Tambah</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>  

<?php
  include('template/footer.php')
?>