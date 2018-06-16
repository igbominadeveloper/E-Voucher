/**
 * Created by Favour Afolayan on 6/10/2018.
 */

class Errors{
    constructor (){
        this.errors = {};
    }
    get(field){
        if (this.errors[field]) return this.errors[field][0];
    }
    record(errors){
        this.errors = errors;
    }
    clear(field) {
        delete this.errors[field];
    }
    has(field){
        if(this.errors[field]) return true;
    }
    any(){
        return Object.keys(this.errors).length > 0;
    }
}

export default Errors
