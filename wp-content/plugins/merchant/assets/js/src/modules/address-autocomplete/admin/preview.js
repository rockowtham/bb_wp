(function ($) {
    'use strict';

    let apiKeyInput = $('.merchant-module-page-setting-field[data-id="api_key"] input');
    let addressInput = $('#merchant-address-autocomplete');

    /**
     * Check if the API key is valid and activate Autocomplete
     */
    function activateAutocompleteIfNeeded() {
        let apiKey = apiKeyInput.val();
        if (apiKey && validateApiKey(apiKey)) {
            loadGoogleMapsScript(apiKey);
        } else {
            deactivateAutocomplete();
        }
    }

    // Trigger activation on page load
    activateAutocompleteIfNeeded();

    // Handle changes to the API key input
    apiKeyInput.on('input', activateAutocompleteIfNeeded);

    /**
     * Load the Google Maps script
     * @param apiKey
     */
    function loadGoogleMapsScript(apiKey) {
        deactivateAutocomplete();
        let scriptURL = `https://maps.googleapis.com/maps/api/js?key=${apiKey}&libraries=places`;
        $.getScript(scriptURL, function () {
            // Create Google Places Autocomplete instance
            new google.maps.places.Autocomplete(addressInput.get(0), {
                types: ['geocode'],
            });
        });
    }

    /**
     * Check the API key length is valid
     * @param apiKey
     * @returns {boolean}
     */
    function validateApiKey(apiKey) {
        return apiKey.length === 39;
    }

    /**
     * Disable Autocomplete for the address input.
     */
    function deactivateAutocomplete() {
        if (window.google?.maps) {
            delete google.maps;
            document.querySelectorAll("script").forEach((script) => {
                if (
                    script.src.includes("googleapis.com/maps") ||
                    script.src.includes("maps.gstatic.com")
                ) {
                    script.remove()
                }
            })
            resetAddressField();
        }
    }

    /**
     * Reset the address input field
     */
    function resetAddressField() {
        addressInput.val('');
        addressInput.css({
            'background-image': 'none',
        });
        addressInput.attr('disabled', false);
        addressInput.attr('placeholder', merchant_admin_address_autocomplete.field_placeholder);
    }

})(jQuery);