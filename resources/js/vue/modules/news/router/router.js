import NewsCreate from '../views/NewsCreate.vue';
import NewsEdit from '../views/NewsEdit.vue';
import NewsIndex from '../views/NewsIndex.vue';
import NewsShow from '../views/NewsShow.vue';
import NewsModule from '../NewsModule.vue';

export default [
    {
        path: '/news',
        component: () => import('@/views/dashboard/Index'),
        name: "NewsModule",
        children: [
            {
                path: 'create',
                name: 'News Create',
                component: NewsCreate,
            },
            {
                path: 'index',
                name: 'news.index',

                component: NewsIndex,
            },
            {
                path: 'edit',
                name: 'news.edit',

                component: NewsEdit,
            },
            {
                path: 'show',
                name: 'news.show',

                component: NewsShow,
            },
        ],
    },
];
