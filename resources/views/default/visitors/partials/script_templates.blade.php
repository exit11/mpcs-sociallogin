{{-- Show : 소셜로그인 프로바이더 --}}
<script type="text/template" id="script-template-sociallogin_provider">
    @{{#each this}}
    <span class="badge bg-info">
        @{{provider}}
    </span> 
    @{{/each}}
</script>
