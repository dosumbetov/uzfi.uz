<aside class="main-sidebar">

    <section class="sidebar">

        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="<?= $directoryAsset ?>/img/user2-160x160.jpg" class="img-circle" alt="User Image"/>
            </div>
            <div class="pull-left info">
                <p>Alexander Pierce</p>

                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>

        <!-- search form -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search..."/>
              <span class="input-group-btn">
                <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
            </div>
        </form>
        <!-- /.search form -->

        <?= dmstr\widgets\Menu::widget(
            [
                'options' => ['class' => 'sidebar-menu tree', 'data-widget'=> 'tree'],
                'items' => [
                    ['label' => 'Menu Yii2', 'options' => ['class' => 'header']],
                    ['label' => 'Login', 'url' => ['site/login'], 'visible' => Yii::$app->user->isGuest],
                    [
                        'label' => 'Some tools',
                        'icon' => 'share',
                        'url' => '#',
                        'items' => [
                            ['label' => 'Menu', 'icon' => 'file-code-o', 'url' => ['/menu'],],
                            ['label' => 'Menu Title', 'icon' => 'file-code-o', 'url' => ['/menu-title'],],
                            ['label' => 'Menu Sub', 'icon' => 'file-code-o', 'url' => ['/menu-sub'],],
                            ['label' => 'Yangiliklar va Elonlar', 'icon' => 'file-code-o', 'url' => ['/pages'],],
                            ['label' => 'Slider', 'icon' => 'file-code-o', 'url' => ['/slider'],],
                            ['label' => 'Institut', 'icon' => 'file-code-o', 'url' => ['/institut'],],
                            ['label' => 'Rektorat', 'icon' => 'file-code-o', 'url' => ['/rektorat'],],
                       
                            [
                                'label' => 'Fakultetlar',
                                'icon' => 'circle-o',
                                'url' => '#',
                                'items' => [
                                    ['label' => 'Fakultetlar', 'icon' => 'circle-o', 'url' => ['/fakultet'],],
                                    ['label' => 'Fakultetga tegishli domlalar', 'icon' => 'circle-o', 'url' => ['/fakultet-staff'],],
                                    ['label' => "O'qituvchilar", 'icon' => 'circle-o', 'url' => ['/teacher'],],
                                    ['label' => 'Kitoblar', 'icon' => 'circle-o', 'url' => ['/books'],],
                                    ['label' => 'Maqolalar', 'icon' => 'circle-o', 'url' => ['/articles'],],
                                   
                                ],
                            ], 
                        ],
                    ],
                ],
            ]
        ) ?>


    </section>

</aside>


<!-- 
                             [
                                'label' => 'Level One',
                                'icon' => 'circle-o',
                                'url' => '#',
                                'items' => [
                                    ['label' => 'Level Two', 'icon' => 'circle-o', 'url' => '#',],
                                    [
                                        'label' => 'Level Two',
                                        'icon' => 'circle-o',
                                        'url' => '#',
                                        'items' => [
                                            ['label' => 'Level Three', 'icon' => 'circle-o', 'url' => '#',],
                                            ['label' => 'Level Three', 'icon' => 'circle-o', 'url' => '#',],
                                        ],
                                    ],
                                ],
                            ], -->