<?php
require 'config.php';
require 'models/Auth.php';

$auth = new Auth($pdo, $base);
$userInfo = $auth->checkToken();
$activeMenu = 'home';

require 'parcials/header.php';
require 'parcials/menu.php';
?>
<section class="feed mt-10">
    <div class="row">
        <div class="column pr-5">
            <?php require 'parcials/feed-editor.php'; ?>
        </div>
        <div class="column side pl-5">
            <div class="box banners">
                <div class="box-header">
                    <div class="box-header-text">Patrocinios</div>
                    <div class="box-header-buttons">
                        
                    </div>
                </div>
            </div>
            <div class="box-body">
                
            </div>
            <div class="box">
                <div class="box-body m-10">
                    Criado com ❤️ por Helington Junior
                </div>
            </div>
        </div>
    </div>
</section>
<?php
require 'parcials/footer.php';
?>