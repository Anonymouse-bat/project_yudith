<?php if ($this->fungsi->user_login()->level == 2) { ?> 
    <?php redirect('Users/v_users_data_member') ?>
<?php } else if ($this->fungsi->user_login()->level == 1) { ?> 
    <?php redirect('Users/v_users_admin') ?>
<?php } ?>