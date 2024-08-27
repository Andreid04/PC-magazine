let gpuOptions = document.getElementById('gpuOptions');
            //let gamer = document.getElementById('gamer');
            //let creator = document.getElementById('creator');

            function display(){
                if (this.checked && this.value === "Gaming")
                    gpuOptions.style.display = "block";
                 else
                    gpuOptions.style.display = "none";
            }

            gamer.addEventListener('change',display);
            creator.addEventListener('change',display);