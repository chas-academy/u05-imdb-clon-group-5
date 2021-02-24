const colors = require("tailwindcss/colors");

module.exports = {
    purge: [],
    darkMode: false, // or 'media' or 'class'
    theme: {
        extend: {
            colors: {
                midnight: {
                    DEFAULT: "#011627",
                    50: "#1593F9",
                    100: "#0686EE",
                    200: "#056ABC",
                    300: "#044E8A",
                    400: "#023259",
                    500: "#011627",
                    600: "#000000",
                    700: "#000000",
                    800: "#000000",
                    900: "#000000",
                },
                dianne: {
                    DEFAULT: "#21394B",
                    50: "#87AECA",
                    100: "#76A2C3",
                    200: "#5289B3",
                    300: "#406F92",
                    400: "#31546E",
                    500: "#21394B",
                    600: "#111E28",
                    700: "#020304",
                    800: "#000000",
                    900: "#000000",
                },
            },
        },
        fontFamily: {
            inter: ["Inter", "sans-serif"],
            poppins: ["Poppins", "sans-serif"],
        },
        //to get one of the fonts above type font-inter or
        //font-poppins for the one you want as a class
    },
    variants: {
        extend: {},
    },
    plugins: [],
};
