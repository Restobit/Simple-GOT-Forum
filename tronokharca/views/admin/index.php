<div class="container">
    <div class="row bg-dark">
        <div class="col-md">
            <div class="card m-4 p-2">
                <div class="card-header text-center"> <b>Felhasználók</b> </div>
                <div class="card-content">
                    <ul>
                        <?php
                        $admin = new Admin();
                        $getAllUsers = $admin->getUsers();
                        foreach ($getAllUsers as $user) {
                            echo "<li class='list-style-decimal m-2 p-2 border-bottom d-flex justify-content-between'>"
                                . $user->userName . " | "
                                . $user->email . " | "
                                . ($user->admin == '1' ? 'Admin' : 'User') . "
                            <button class='btn btn-primary ' onclick=editUser('$user->id','$user->userName','$user->email','$user->admin')>Szerkesztés</button>
                            <button class='btn btn-danger ' onclick=deleteUser('$user->id')>Törlés</button>
                             </li>";
                        }

                        ?>
                    </ul>
                </div>
                <div id="editUser" class="col-md">

                </div>
            </div>
        </div>
        <div class="col-md">
            <div class="card m-4 p-2">
                <div class="card-header text-center"><b>Kapcsolati üzenetek</b></div>
                <div class="card-content">
                    <div class='col-md'>
                        <ul>
                            <?php
                            $admin = new Admin();
                            $contactComments = $admin->getCommets();

                            foreach ($contactComments as $comment) {
                                echo "
                                        <div class='card m-3'>
                                        <div class='card-header d-flex justify-content-between'><b>" . $comment->name . " | " . $comment->sendDate . "</b></div>
                                        <div class='card-content'>
                                            <ul>
                                                <li class='list-style-none'>Email: <u>" . $comment->email . "</u></li>
                                                <li class='list-style-none p-2'><u>Üzenet</u>: " . $comment->comment . "</li>
                                            </ul>
                                        </div>
                                    </div>
                                    ";
                            }
                            ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>