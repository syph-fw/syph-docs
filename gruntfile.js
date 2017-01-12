module.exports = function(grunt) {

  var autoprefixer = require('autoprefixer')({
    browsers: [
      'Chrome >= 35',
      'Firefox >= 31',
      'Edge >= 12',
      'Explorer >= 10',
      'iOS >= 8',
      'Safari >= 8',
      'Android 2.3',
      'Android >= 4',
      'Opera >= 12'
    ]
  });
  
  // Project configuration.
  grunt.initConfig({
    pkg: grunt.file.readJSON('package.json'),
    
    banner: '/*!\n' +
            ' * TheDocs v<%= pkg.version %> (<%= pkg.homepage %>)\n' +
            ' * Copyright <%= grunt.template.today("yyyy") %> <%= pkg.author %>\n' +
            ' * Licensed under the Themeforest Standard Licenses\n' +
            ' */\n',


    // Task configuration
    // -------------------------------------------------------------------------------


    // Complile SCSS
    sass: {

      // dist: {
      //   options: {
      //     sourceMap: false,
      //     outputStyle: 'compressed'
      //   },
      //   files: {
      //     'public/assets/css/<%= pkg.name %>.css': 'public/assets/css/<%= pkg.name %>.scss',
      //     'public/assets/css/skin-blue.css': 'public/assets/css/theDocs/skins/skin-blue.scss',
      //     'public/assets/css/skin-brown.css': 'public/assets/css/theDocs/skins/skin-brown.scss',
      //     'public/assets/css/skin-cyan.css': 'public/assets/css/theDocs/skins/skin-cyan.scss',
      //     'public/assets/css/skin-dark.css': 'public/assets/css/theDocs/skins/skin-dark.scss',
      //     'public/assets/css/skin-gray.css': 'public/assets/css/theDocs/skins/skin-gray.scss',
      //     'public/assets/css/skin-green.css': 'public/assets/css/theDocs/skins/skin-green.scss',
      //     'public/assets/css/skin-orange.css': 'public/assets/css/theDocs/skins/skin-orange.scss',
      //     'public/assets/css/skin-pink.css': 'public/assets/css/theDocs/skins/skin-pink.scss',
      //     'public/assets/css/skin-purple.css': 'public/assets/css/theDocs/skins/skin-purple.scss',
      //     'public/assets/css/skin-red.css': 'public/assets/css/theDocs/skins/skin-red.scss',
      //     'public/assets/css/skin-teal.css': 'public/assets/css/theDocs/skins/skin-teal.scss',
      //     'public/assets/css/skin-yellow.css': 'public/assets/css/theDocs/skins/skin-yellow.scss'
      //   }
      // },

      dev: {
        options: {
          sourceMap: true,
          outputStyle: 'expanded'
        },
        files: {
          'public/assets/css/<%= pkg.name %>.css': 'public/assets/css/<%= pkg.name %>.scss'
        }
      }
    },
    

    // Watch on SCSS files
    watch: {
      sass: {
        files: ['public/assets/css/**/*.scss'],
        tasks: ['sass:dev']
      }
    },
    
    // browserSync: {
    //   dev: {
    //     bsFiles: {
    //       src : [
    //         'public/assets/css/*.css',
    //         'public/*.html'
    //       ]
    //     },
    //     options: {
    //       watchTask: true,
    //       server: true
    //     }
    //   }
    // },

    // Clean files and directories
    // clean: {
    //   options: {
    //     force: true
    //   },
    //   before_copy: ['dist'],
    //   after_copy: {
    //     src: ["dist/Starter-kit/*.html",
    //           "!dist/Starter-kit/layout_boxed*.html",
    //           "!dist/Starter-kit/layout_full*.html",
    //           "!dist/Starter-kit/layout_sidebar*.html",
    //           "!dist/Starter-kit/layout_single*.html",
    //           "dist/**/theDocs.js",
    //           "dist/**/theDocs.css",
    //           "dist/**/*.css.map",
    //           "dist/**/theDocs.scss",
    //           "dist/**/css/theDocs",
    //           "dist/Starter-kit/assets/css/custom.css",
    //           "dist/Starter-kit/assets/js/custom.js",
    //           "dist/Starter-kit/assets/img/*",
    //           "!dist/Starter-kit/assets/img/favicon*",
    //           "!dist/Starter-kit/assets/img/logo*",
    //           ],
    //   }
    // },


    // Replace
    // replace: {
    //   dist: {
    //     src: ['dist/Starter-kit/*.html', 'dist/Documentation/*.html'],
    //     overwrite: true,
    //     replacements: [{
    //       from: /    <link href="assets\/css\/theDocs\.css" rel="stylesheet">\n/g,
    //       to: ""
    //     },
    //     {
    //       from: /    <script src="assets\/js\/theDocs\.js"><\/script>\n/g,
    //       to: ""
    //     }]
    //   }
    // },


    // Copy files
    copy: {
      // dist: {
      //   files: [
      //     // dist folder
      //     {expand: true, cwd: 'src/', src: ['**'], dest: 'dist/Documentation'},
      //     {expand: true, cwd: 'src/', src: ['**'], dest: 'dist/Starter-kit'},
      //
      //   ],
      // },

      // source: {
      //   files: [
      //     {expand: true, cwd: 'public/', src: ['**'], dest: 'dist/Source/src'},
      //     {expand: true, cwd: '.', src: ['package.json', 'gruntfile.js'], dest: 'dist/Source'},
      //
      //   ]
      // },

      dev: {
        files: [
          {expand: true, cwd: 'public/packages/bootstrap/fonts', src: ['**'], dest: 'public/assets/fonts/'},
          {expand: true, cwd: 'public/packages/font-awesome/fonts', src: ['**'], dest: 'public/assets/fonts/'}
        ]
      }
    },

    // Concat file to make theDocs.all
    concat: {
      // dist: {
      //   files: {
      //     // Javascript
      //     'dist/Starter-kit/assets/js/theDocs.all.min.js': [
      //       'src/assets/vendors/jquery/jquery.min.js',
      //       'src/assets/vendors/bootstrap/js/bootstrap.min.js',
      //       'src/assets/vendors/prism/prism.js',
      //       'src/assets/vendors/clipboard.js/clipboard.min.js',
      //       'src/assets/vendors/lity/lity.min.js',
      //       'src/assets/vendors/fitvids/jquery.fitvids.js',
      //       'src/assets/vendors/jquery.slimscroll.min.js',
      //       'src/assets/vendors/matchHeight.min.js',
      //       'src/assets/js/theDocs.js'
      //     ],
      //
      //     'dist/Documentation/assets/js/theDocs.all.min.js': [
      //       'src/assets/vendors/jquery/jquery.min.js',
      //       'src/assets/vendors/bootstrap/js/bootstrap.min.js',
      //       'src/assets/vendors/prism/prism.js',
      //       'src/assets/vendors/clipboard.js/clipboard.min.js',
      //       'src/assets/vendors/lity/lity.min.js',
      //       'src/assets/vendors/fitvids/jquery.fitvids.js',
      //       'src/assets/vendors/jquery.slimscroll.min.js',
      //       'src/assets/vendors/matchHeight.min.js',
      //       'src/assets/js/theDocs.js'
      //     ],
      //
      //     // CSS
      //     'dist/Starter-kit/assets/css/theDocs.all.min.css': [
      //       'src/assets/vendors/bootstrap/css/bootstrap.min.css',
      //       'src/assets/vendors/font-awesome/css/font-awesome.min.css',
      //       'src/assets/vendors/prism/prism.css',
      //       'src/assets/vendors/lity/lity.min.css',
      //       'src/assets/css/theDocs.css'
      //     ],
      //
      //     'dist/Documentation/assets/css/theDocs.all.min.css': [
      //       'src/assets/vendors/bootstrap/css/bootstrap.min.css',
      //       'src/assets/vendors/font-awesome/css/font-awesome.min.css',
      //       'src/assets/vendors/prism/prism.css',
      //       'src/assets/vendors/lity/lity.min.css',
      //       'src/assets/css/theDocs.css'
      //     ]
      //   },
      // },

      dev: {
        files: {
          // Javascript
          'public/assets/js/theDocs.all.min.js': [
            'public/packages/jquery/dist/jquery.min.js',
            'public/packages/bootstrap/dist/js/bootstrap.min.js',
            'public/assets/vendor/prism.js',
            'public/packages/clipboard/dist/clipboard.min.js',
            'public/packages/lity/dist/lity.min.js',
            // 'src/assets/vendors/fitvids/jquery.fitvids.js',
            'public/packages/jquery-slimscroll/jquery.slimscroll.min.js',
            'public/packages/matchHeight/dist/jquery.matchHeight-min.js'
          ],

          // CSS
          'public/assets/css/theDocs.all.min.css': [
            'public/packages/bootstrap/dist/css/bootstrap.min.css',
            'public/packages/font-awesome/css/font-awesome.min.css',
            'public/assets/vendor/prism.css',
            'public/packages/lity/dist/lity.min.css'
          ]
        },
      },
    },

    // Uglify JS files
    uglify: {
      options: {
        mangle: true,
        //preserveComments: 'some',
        banner: '<%= banner %>'
      },
      dev: {
        files: {
          'public/assets/js/theDocs.all.min.js': ['public/assets/js/theDocs.all.min.js']
        }
      }
    },

    // Do some post processing on CSS files
    postcss: {
      options: {
        processors: [
          autoprefixer, // add vendor prefixes
          require('cssnano')({zindex: false}) // minify the result
        ]
      },
      dev: {
        src: 'public/assets/css/theDocs.all.min.css'
      }
    }
    
    // Create custom.js and custom.css files
    // "file-creator": {
    //   build: {
    //     "dist/Starter-kit/assets/js/custom.js": function(fs, fd, done) {
    //       fs.writeSync(fd, '$(function() {\n\n\n\n})(jQuery);');
    //       done();
    //     },
    //
    //     "dist/Starter-kit/assets/css/custom.css": function(fs, fd, done) {
    //       fs.writeSync(fd, '');
    //       done();
    //     }
    //   }
    // },
    
  
    // -------------------------------------------------------------------------------
    // END Task configuration
    
  });


  // Load the plugins
  grunt.loadNpmTasks('grunt-contrib-uglify');
  grunt.loadNpmTasks('grunt-contrib-watch');
  grunt.loadNpmTasks('grunt-contrib-concat');
  // grunt.loadNpmTasks('grunt-contrib-clean');
  grunt.loadNpmTasks('grunt-contrib-copy');
  grunt.loadNpmTasks('grunt-file-creator');
  // grunt.loadNpmTasks('grunt-text-replace');
  grunt.loadNpmTasks('grunt-postcss');
  grunt.loadNpmTasks('grunt-sass');
  // grunt.loadNpmTasks('grunt-browser-sync');

  grunt.registerTask('default');

  // grunt.registerTask('dist',
  //   [
  //     'sass:dist',
  //     'clean:before_copy',
  //     'copy:dist',
  //     'concat:dist',
  //     'replace:dist',
  //     'uglify:dist',
  //     'postcss:dist',
  //     'clean:after_copy',
  //     'file-creator',
  //     'copy:source'
  //   ]
  // );

  grunt.registerTask('dev',
    [
      'sass:dev',
      'concat:dev',
      'uglify:dev',
      'postcss:dev',
      'copy:dev'
      // 'watch'
    ]
  );

};