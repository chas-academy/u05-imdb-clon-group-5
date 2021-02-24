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
            },
        },
    },
    variants: {
        extend: {},
    },
    plugins: [],
};
