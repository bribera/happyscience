//ajax-search.js
'use strict';

jQuery(function() {

    jQuery(document).ready(function($) {
        let $searchInput = $('#s');
        let $searchResults = $('#ajax-search-results');
        $searchInput.on('input', function () {
            let query = $(this).val();
            if (query.length > 1) {
                $searchResults.html('<div style="padding: 0 8px; position:relative; background-color:white; height:100px; display: flex; align-items:center; justify-content: center;"><div class="circle"><div class="ball"></div></div></div>');
                $.ajax({
                    url: ajax_search_params.ajax_url,
                    type: 'get',
                    data: {
                        action: 'ajax_search',
                        query: query,
                    },
                    success: function (data) {
                        $searchResults.html(data, '<div style="padding: 4px 8px; position:relative; color:black ; background-color:white; height:100px; display: flex; align-items:center; justify-content: center;"></div>' );
                    },
                    error: function (error) {
                        $searchResults.html('<div>Sorry, but we cannot process your search request at this time.</div>');
                    },
                });
            } else {
                $searchResults.html('');
            }
        });
    });

});
