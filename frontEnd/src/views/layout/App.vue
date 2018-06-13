<template>
    <div class="menu">
        <div class="header">
            <header class="mint-header is-fixed">
                <div class="mint-header-button is-left">编辑</div>
                <h1 class="mint-header-title">今日目标</h1>
                <div class="mint-header-button is-right">+</div>
            </header>
        </div>
        <div class="mian">

        </div>
        <div class="footer">
            <mt-tabbar :selected.sync="selected">
            <mt-tab-item id="今日">
                <img slot="icon" src="../assets/btn-img.png">
                今日
            </mt-tab-item>
            <mt-tab-item id="完成">
                <img slot="icon" src="../assets/btn-img.png">
                完成
            </mt-tab-item>
            <mt-tab-item id="我的">
                <img slot="icon" src="../assets/btn-img.png">
                我的
            </mt-tab-item>
            </mt-tabbar>
        </div>
        <router-view></router-view>
    </div>
</template>

<script>
    import Menu from '~/menu/index';

    export default {
        data() {
            return {
                menu: Menu,
                selected:true,
            };
        },
        methods: {
            sidebarToggle() {
            },

        },
        mounted: function () {

        },
        components: {

        },
    }
</script>
<style lang="less">
    .menu {

    }
</style>