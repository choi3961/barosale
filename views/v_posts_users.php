<!-- This is the page showing all the users in the server for other users to decide to follow or unfollow -->
<div class = 'container'>

    <!--
    This is head part of the page.
    -->
    <div class = 'header'>
        <div class = 'header03'>농 산 물 생 산 자</div>
    </div>

    <!--
    This is body part of the page.
    -->
    <div class = 'container02'>
        <table class = 'table table-striped'>
            <thead>
                <tr>
                    <th>성 명</th>
                    <th>선 택 </th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($users as $user): ?>
                <tr>
                    <td><?=$user['first_name']?> <?=$user['last_name']?></td><!-- Print this user's name -->
                    <td>
                        <!-- If there exists a connection with this user, show a unfollow link -->
                        <?php if(isset($connections[$user['user_id']])): ?>
                        <a href='/posts/unfollow/<?=$user['user_id']?>'>다 음 에 보 기 </a>
                        <!-- Otherwise, show the follow link -->
                        <?php else: ?>
                        <a href='/posts/follow/<?=$user['user_id']?>'>보 기 </a>
                        <?php endif; ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>