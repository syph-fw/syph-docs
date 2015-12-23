<!doctype html>
<!--
  Material Design Lite
  Copyright 2015 Google Inc. All rights reserved.

  Licensed under the Apache License, Version 2.0 (the "License");
  you may not use this file except in compliance with the License.
  You may obtain a copy of the License at

      https://www.apache.org/licenses/LICENSE-2.0

  Unless required by applicable law or agreed to in writing, software
  distributed under the License is distributed on an "AS IS" BASIS,
  WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
  See the License for the specific language governing permissions and
  limitations under the License
-->

<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="description" content="Introducing Lollipop, a sweet new take on Android.">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Android</title>

        <!-- Page styles -->
        <link href="https://fonts.googleapis.com/css?family=Roboto:regular,bold,italic,thin,light,bolditalic,black,medium&amp;lang=en" rel="stylesheet">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

        <link rel="stylesheet" href="material.min.css">
        <link rel="stylesheet" href="<?php echo asset('/assets/css/material.min.css'); ?>">
        <link rel="stylesheet" href="<?php echo asset('/assets/css/material-style.css'); ?>">
        <link rel="stylesheet" href="material-style">
    </head>
    <body>
    <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">

        <div class="android-header mdl-layout__header mdl-layout__header--waterfall">
            <div class="mdl-layout__header-row">
              <span class="android-title mdl-layout-title">
                <img style="height: 80px;width: 100px;" class="android-logo-image" src="assets/images/sylabs_logo.png">
              </span>
                <!-- Add spacer, to align navigation to the right in desktop -->
                <div class="android-header-spacer mdl-layout-spacer"></div>
                <div class="android-search-box mdl-textfield mdl-js-textfield mdl-textfield--expandable mdl-textfield--floating-label mdl-textfield--align-right mdl-textfield--full-width">
                    <label class="mdl-button mdl-js-button mdl-button--icon" for="search-field">
                        <i class="material-icons">search</i>
                    </label>
                    <div class="mdl-textfield__expandable-holder">
                        <input class="mdl-textfield__input" type="text" id="search-field">
                    </div>
                </div>
                <!-- Navigation -->
                <div class="android-navigation-container">
                    <nav class="android-navigation mdl-navigation">
                        <a class="mdl-navigation__link mdl-typography--text-uppercase" href="">Docs</a>
                        <a class="mdl-navigation__link mdl-typography--text-uppercase" href="">Support</a>
                        <a class="mdl-navigation__link mdl-typography--text-uppercase" href="">Contact us</a>
                    </nav>
                </div>
              <span class="android-mobile-title mdl-layout-title">
                <img style="height: 80px;" class="android-logo-image" src="assets/images/sylabs_logo.png">
              </span>
                <button class="android-more-button mdl-button mdl-js-button mdl-button--icon mdl-js-ripple-effect" id="more-button">
                    <i class="material-icons">more_vert</i>
                </button>
                <ul class="mdl-menu mdl-js-menu mdl-menu--bottom-right mdl-js-ripple-effect" for="more-button">
                    <li class="mdl-menu__item">5.0 Lollipop</li>
                    <li class="mdl-menu__item">4.4 KitKat</li>
                    <li disabled class="mdl-menu__item">4.3 Jelly Bean</li>
                    <li class="mdl-menu__item">Android History</li>
                </ul>
            </div>
        </div>

        <div class="android-drawer mdl-layout__drawer">
            <span class="mdl-layout-title">
              <img class="android-logo-image" src="assets/images/sylabs_logo.png">
            </span>
            <nav class="mdl-navigation">
                <a class="mdl-navigation__link" href="">Phones</a>
                <a class="mdl-navigation__link" href="">Tablets</a>
                <a class="mdl-navigation__link" href="">Wear</a>
                <div class="android-drawer-separator"></div>
                <span class="mdl-navigation__link" href="">Versions</span>
                <a class="mdl-navigation__link" href="">Lollipop 5.0</a>
                <a class="mdl-navigation__link" href="">KitKat 4.4</a>
                <a class="mdl-navigation__link" href="">Jelly Bean 4.3</a>
                <a class="mdl-navigation__link" href="">Android history</a>
                <div class="android-drawer-separator"></div>
                <span class="mdl-navigation__link" href="">Resources</span>
                <a class="mdl-navigation__link" href="">Official blog</a>
                <a class="mdl-navigation__link" href="">Android on Google+</a>
                <a class="mdl-navigation__link" href="">Android on Twitter</a>
                <div class="android-drawer-separator"></div>
                <span class="mdl-navigation__link" href="">For developers</span>
                <a class="mdl-navigation__link" href="">App developer resources</a>
                <a class="mdl-navigation__link" href="">Android Open Source Project</a>
                <a class="mdl-navigation__link" href="">Android SDK</a>
            </nav>
        </div>

        <div class="android-content mdl-layout__content">

        </div>
    </div>
    <script src="<?php echo asset('/assets/js/material.min.js'); ?>"></script>
    </body>
</html>
