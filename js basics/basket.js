const basket = (function () {
    const items = [];

    function addItem(item) {
        items.push(item);
    }

    function getItem(index) {
        return items[index];
    }

    function itemsCount() {
        return items.length;
    }

    return {
        items: items,
        add: function(value) {
            addItem(value);
        }, 
        get: function (index) {
            return getItem(index);
        }, 
        count: function() {
            return itemsCount();
        }
    };
})();

module.exports = basket;