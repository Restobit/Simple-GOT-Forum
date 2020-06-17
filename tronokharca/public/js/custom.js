
function editUser(userID, userName, userEmail, permission) {
    console.log("editUser -> userID, userName, userEmail, permission", userID, userName, userEmail, permission);
    $("#editUser").empty();
    let tempalte = `<div class="card">
                        <div class="card-header text-center"><b>Szereksztés</b></div>
                            <div class="card-content col-md">
                                <form action="admin/editUser" method="POST" class="d-flex flex-column m-2 p-4 justify-content-between">

                                    <input type="hidden" name="id" value="${userID}">
                                    <label for="username">Felhasználónév</label>
                                    <input type="text" name="username" value="${userName}">

                                    <label for="email">Email</label>
                                    <input type="email" name="email" value="${userEmail}">

                                    <label class="mt-3" for="admin">Jogosultság</label>
                                        <div class="input-group-text">
                                        <p>Admin <input type="checkbox" name="admin" ${permission == '1' ? 'checked' : ''}></p>
                                            
                                        </div>
                                    <div class="card-footer text-center">
                                        <button type="submit" class="btn btn-primary">Mentés</button>
                                    </div>
                                </form>
                            </div>
                    </div>`;

    $("#editUser").append(tempalte);

}

function deleteUser(userID) {
    $.post("admin/deleteUserById", { "id": userID }, (returnedData) => {
        if (returnedData == "success") {
            location.reload();
        }
    });
}