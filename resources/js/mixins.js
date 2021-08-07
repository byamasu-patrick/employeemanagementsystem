export default {
    methods:{
        getCsrfToken(){
            return $('meta[name="csrf-token"]').attr('content');
        }
    }
}