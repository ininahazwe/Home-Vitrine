var rellax = new Rellax('.rellax', {
    // center: true
    callback: function (position) {
      // callback every position change
      console.log(position);
    },
    breakpoints: [576, 768, 1024]
  });