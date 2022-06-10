<?php

    require_once '../conn.php';

    $data = show('tb_users', 'id > 0');

?>

<table id="example2" class="table table-striped table-bordered">
                          <thead>
                            <tr>
                              <th>No</th>
                              <th>Username</th>
                              <th>Password</th>
                              <th>Role</th>
                              <th>Aksi</th>
                            </tr>
                          </thead>
                          <tbody>
                            <?php foreach ($data as $id => $v) : ?>

                            <tr>
                              <td><?= $id + 1 ?></td>
                              <td><?= $v['username'] ?></td>
                              <td><?= $v['password'] ?></td>
                              <td><?= $v['role'] ?></td>
                                <td>
                                    <a onclick="deleteData(<?= $v['id']?>)" class="btn btn-danger">Delete</a>
                                </td>
                            </tr>

                            <?php endforeach; ?>

                          </tbody>
                          <tfoot>
                            <tr>
                              <th>No</th>
                              <th>Username</th>
                              <th>Password</th>
                              <th>Role</th>
                              <th>Aksi</th>
                            </tr>
                          </tfoot>
                        </table>