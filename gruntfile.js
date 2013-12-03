'use strict';
module.exports = function(grunt) {

  grunt.initConfig({
    jshint: {
      options: {
        jshintrc: '.jshintrc'
      },
      all: [
        'Gruntfile.js',
        'assets/js/*.js',
        'assets/js/plugins/*.js',
        '!assets/js/bootstrap.js'
      ]
    },
      recess: {
      dist: {
        options: {
          compile: true,
          compress: true
        },
        files: {
          'assets/css/bootstrap.css': [
           'assets/less/bootstrap.less'
			//'assets/less/preg.less'
          ]
        }
      } 
    }, 
    uglify: {
      dist: {
        files: {  //compile bootstrap files into one file "bootstrap.js"
          'assets/js/bootstrap.js': [
            'assets/js/plugins.js',
            'assets/js/vendor/*.js',
            'assets/js/_*.js'
          ]
        }
      }
    },
    watch: {
      less: {
        files: [
          'assets/less/*.less',
          'assets/less/bootstrap/*.less'
        ],

      },
      js: {
        files: [
          '<%= jshint.all %>'
        ],

      }
    },
    clean: {
      dist: [
        'assets/css/bootstrap.css',
        'assets/js/bootstrap.js',
		
      ]
    }
  });

  // Load tasks
  grunt.loadTasks('tasks');
  grunt.loadNpmTasks('grunt-contrib-clean');
  grunt.loadNpmTasks('grunt-contrib-jshint');
  grunt.loadNpmTasks('grunt-contrib-uglify');
  grunt.loadNpmTasks('grunt-contrib-watch');
  grunt.loadNpmTasks('grunt-recess');

  // Register tasks
  grunt.registerTask('default', [
    'clean',
    'recess',
    'uglify'
  ]);
  grunt.registerTask('dev', [
    'watch'
  ]);

};