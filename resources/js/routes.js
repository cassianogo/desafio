import AllOp from './components/AllOp.vue';
import AddOp from './components/AddOP.vue';
import EditOp from './components/EditOp.vue';
 
export const routes = [
    {
        name: 'home',
        path: '/',
        component: AllOp
    },
    {
        name: 'add',
        path: '/add',
        component: AddOp
    },
    {
        name: 'edit',
        path: '/edit/:id',
        component: EditOp
    }
];