import Vue from 'vue';
import iView from 'iview';
import 'iview/dist/styles/iview.css';
import locale from 'iview/dist/locale/en-US';

Vue.use(iView, { locale });

import NewsflowFeed from './vue/page/feed.vue';
Vue.component('newsflow-feed', NewsflowFeed);

import NewsflowSources from './vue/page/sources.vue';
Vue.component('newsflow-sources', NewsflowSources);

import NewsflowFilters from './vue/page/filters.vue';
Vue.component('newsflow-filters', NewsflowFilters);

import NewsflowViews from './vue/page/views.vue';
Vue.component('newsflow-views', NewsflowViews);

import NewsflowSettings from './vue/page/settings.vue';
Vue.component('newsflow-settings', NewsflowSettings);

if(document.getElementById("newsflow-app")){
    new Vue({
        el: '#newsflow-app'
    });
}

