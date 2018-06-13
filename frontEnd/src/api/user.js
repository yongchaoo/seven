import {buildApiRequest as R,getApiUrl as U} from './init'

export default {
    login: (p,c) => R(p,'user/login','post',c),
}


