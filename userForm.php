<?php
  include('template/header.php');
  
  if (isset($_GET['id'])) {
    include('system/get_user.php');
  }
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
                                <?php
                                    if (isset($_GET['id'])) {
                                ?>
                                    <form
                                        action="./system/update_user.php"
                                        method="POST"
                                    >
                                <?php
                                    } else {
                                ?>
                                    <form
                                        action="./system/input_user.php"
                                        method="POST"
                                    >
                                <?php
                                    }
                                ?>
                                    <div class="input-group input-group-outline mb-3">
                                        <input
                                            type="text"
                                            name="name"
                                            class="form-control"
                                            placeholder="Name"
                                            value="<?php if (isset($_GET['id'])) { echo $row['name']; }?>"
                                        >
                                        <input type="hidden" name="id" value="<?php echo $row['id'] ?>">
                                    </div>
                                    <div class="input-group input-group-outline mb-3">
                                        <input
                                            type="email"
                                            name="email"
                                            class="form-control"
                                            placeholder="Email"
                                            value="<?php if (isset($_GET['id'])) { echo $row['email']; }?>"
                                        >
                                    </div>
                                    <div class="input-group input-group-outline mb-3">
                                        <input
                                            type="password"
                                            name="password"
                                            class="form-control"
                                            placeholder="New Password"
                                        >
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