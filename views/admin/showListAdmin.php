<a href="/index.php?controller=user&action=showFormAddAdmin" type="button" class="btn btn-success" style="margin-left: 86%; margin-top: 10px; margin-bottom: 10px">Add Admin</a>
<table class="table" style="border: 1px solid black; margin:auto; text-align: center; width: 90%">
    <thead>
        <tr>
            <th width="10%">ID</th>
            <th width="30%">Name</th>
            <th width="30%">Avatar</th>
            <th width="30%"></th>
        </tr>
    </thead>
    <tbody>

        <?php


        foreach ($users as $user) {
            echo '<tr>
                <th>' . $user->id . '</th>
                <th>' . $user->name . '</th>
                <th><img style="width: 40px; hight: 50px" src="' . $user->avatar . '"></th>
                <th>
                    <button type="button" class="btn btn-primary">Edit</button>
                    <button type="button" class="btn btn-danger">Remove</button>
                </th>
            </tr>';
        }
        ?>



    </tbody>
</table>