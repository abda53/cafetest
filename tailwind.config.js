module.exports = {
  purge: [
    'source/**/*.blade.php',
    'source/**/*.md',
    'source/**/*.html',
  ],
  theme: {
	extend:{
	    colors: {
		    deli_black: "#020202",
		    deli_red: "#B72730",
		    deli_black: "#000000",
		    deli_blue: "#1793ED",
	    },
	},
  },
  variants: {
    extend: {},
  },
  plugins: [],
};
