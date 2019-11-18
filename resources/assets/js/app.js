import Vue from 'vue';
import axios from "axios";


new Vue({
    delimiters: ['{(', ')}'],
    data: {
        ideas: [],
        categories: [],
        form: {
            categories: []
        },
        success: false,
        error: false,
    },
    methods: {
        getIdeas: function () {
            var _t = this;

            axios
                .get('/api/ideas')
                .then(function (res) {
                    _t.ideas = res.data;
                });
        },
        getCategories: function () {
            var _t = this;

            axios
                .get('/api/categories')
                .then(function (res) {
                    _t.categories = res.data;
                });
        },
        resetForm: function() {
            this.form = {
                categories: [],
            };
        },
        setSuccess: function() {
            this.success = true;
            this.error = false;
        },
        setError: function() {
            this.error = true;
            this.success = false;
        },
        submitForm: function() {
            var _t = this;

            axios
                .post('/api/create/idea', this.form)
                .then(function(res) {
                    // Success
                    _t.setSuccess();
                    _t.resetForm();
                    _t.ideas = res.data;
                    _t.getIdeas();
                }).catch(function(res) {
                    // Error
                    _t.setError();
                });
        },
        loop: function() {
            var _t = this;

            this.getIdeas();
            this.getCategories();

            setTimeout( function() {
                _t.loop();
            }, 5000);
        }
    },
    mounted() {
        this.getIdeas();
        this.getCategories();
        this.loop();
    }
}).$mount('#app');
