

// -------------------------------------
// Grunt ftpush
// -------------------------------------

module.exports = {
  deploy_child: {
    auth: {
      host: 'ftp.vgarderen.nl',
      port: 21,
      authKey: 'auth'
    },
    src: 'dist/child',
    dest: 'public_html/wp-content/themes/slate-<%= package.version %>_<%= package.name %>',
    simple: true,
    useList: true
  }

};
