let a=document.getElementById('14900k');
    let b=document.getElementById('13400F');
    let c=document.getElementById('7700X');
    let d=document.getElementById('7800X3D');

    function show(product){
        var imageElement = document.getElementById(product + '_image');
        var textElement = document.getElementById(product + '_text');
      
        if (imageElement && textElement) {
            imageElement.src = 'images/' + product + '.jpg'; 
            textElement.textContent = getProductDescription(product); 
        }
    }

    function hide(product) {
        var imageElement = document.getElementById(product + '_image');
        var textElement = document.getElementById(product + '_text');

        if (imageElement && textElement) {
            imageElement.src = '';
            textElement.textContent = '';
        }
    }

    function getProductDescription(product) {
        var descriptions = {
            '14900k': 'The Intel Core i9 14900k is a high-performance processor suitable for gaming and heavy multitasking.',
            '13400F': 'A budget-friendly processor offering solid performance for everyday computing tasks and light gaming.',
            '7700X': 'A high-performance CPU designed for gaming enthusiasts and content creators, offering exceptional multitasking capabilities and smooth gaming experiences.',
            '7800X3D': 'An advanced processor featuring cutting-edge technologies for demanding tasks, including gaming, content creation, and multitasking, with enhanced 3D rendering capabilities for immersive experiences.'

        };
        return descriptions[product] || '';
    }

    
a.addEventListener('mouseover', function() {
    show('14900k');
});

a.addEventListener('mouseout', function() {
    hide('14900k');
});

b.addEventListener('mouseover', function() {
    show('13400F');
});
b.addEventListener('mouseout', function() {
    hide('13400F');
});

c.addEventListener('mouseover', function() {
    show('7700X');
});
c.addEventListener('mouseout', function() {
    hide('7700X');
});

d.addEventListener('mouseover', function() {
    show('7800X3D');
});
d.addEventListener('mouseout', function() {
    hide('7800X3D');
});