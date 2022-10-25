<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="/img/logo.png">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="./js/bootstrap.min.js">
    <!-- Font Awesome adding -->
    <script src="https://kit.fontawesome.com/c045880d2c.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="./css/newcss.css">
    <title>Doctor</title>


    <!-- Jquery adding for Table management -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.css">
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.js"></script>

 

</head>
<body>
    <?php
        include('navbar.php');
    ?>
    <br>

    <div class="container">
        

        <div id = "pathprint" style="display: none">

        </div>
        <div id = "mindist" style="display: none">

        </div>


        <div id = "formdiv">
            <h1>
                Select Locations 
            </h1>
            <br>
            
        <form id="locForm">
            <div class="form-group">
                <label for="cloc">Current Location</label>
                <select class="form-select" id = "cloc" aria-label="Default select example">
                    <option selected>Select Current Location</option>
                    <option value="Kushtia">Kushtia</option>
                    <option value="Jhenaidah">Jhenaidah</option>
                    <option value="Jashore">Jashore</option>
                    <option value="Satkhira">Satkhira</option>
                    <option value="Khulna">Khulna</option>
                </select>
            </div>
            <div class="form-group">
                <label for="dloc">Destination Location</label>
                <select class="form-select" id = "dloc" aria-label="Default select example">
                    <option selected>Select Destination Location</option>
                    <option value="Kushtia">Kushtia</option>
                    <option value="Jhenaidah">Jhenaidah</option>
                    <option value="Jashore">Jashore</option>
                    <option value="Satkhira">Satkhira</option>
                    <option value="Khulna">Khulna</option>
                </select>
            </div>
    
            <button type="button" class="btn btn-primary" onclick = "dijkstra()">Submit</button>
        </form>


        </div>

        
    </div>


    <br>
    <br>
    <?php

        include('footer.php');

    ?>
















    <script>

        function dijkstra () {
            var cloc = document.getElementById("cloc").value;
            var dloc = document.getElementById("dloc").value;
            document.getElementById("formdiv").style.display = "none";
            document.getElementById("pathprint").style.display = "block";
            document.getElementById("mindist").style.display = "block";





            //Dijkstra algorithm is used to find the shortest distance between two nodes inside a valid weighted graph. Often used in Google Maps, Network Router etc.

            //helper class for PriorityQueue
            class Node {
            constructor(val, priority) {
                this.val = val;
                this.priority = priority;
            }
            }

            class PriorityQueue {
            constructor() {
                this.values = [];
            }
            enqueue(val, priority) {
                let newNode = new Node(val, priority);
                this.values.push(newNode);
                this.bubbleUp();
            }
            bubbleUp() {
                let idx = this.values.length - 1;
                const element = this.values[idx];
                while (idx > 0) {
                let parentIdx = Math.floor((idx - 1) / 2);
                let parent = this.values[parentIdx];
                if (element.priority >= parent.priority) break;
                this.values[parentIdx] = element;
                this.values[idx] = parent;
                idx = parentIdx;
                }
            }
            dequeue() {
                const min = this.values[0];
                const end = this.values.pop();
                if (this.values.length > 0) {
                this.values[0] = end;
                this.sinkDown();
                }
                return min;
            }
            sinkDown() {
                let idx = 0;
                const length = this.values.length;
                const element = this.values[0];
                while (true) {
                let leftChildIdx = 2 * idx + 1;
                let rightChildIdx = 2 * idx + 2;
                let leftChild, rightChild;
                let swap = null;

                if (leftChildIdx < length) {
                    leftChild = this.values[leftChildIdx];
                    if (leftChild.priority < element.priority) {
                    swap = leftChildIdx;
                    }
                }
                if (rightChildIdx < length) {
                    rightChild = this.values[rightChildIdx];
                    if (
                    (swap === null && rightChild.priority < element.priority) ||
                    (swap !== null && rightChild.priority < leftChild.priority)
                    ) {
                    swap = rightChildIdx;
                    }
                }
                if (swap === null) break;
                this.values[idx] = this.values[swap];
                this.values[swap] = element;
                idx = swap;
                }
            }
            }

            //Dijkstra's algorithm only works on a weighted graph.

            class WeightedGraph {
            constructor() {
                this.adjacencyList = {};
            }
            addVertex(vertex) {
                if (!this.adjacencyList[vertex]) this.adjacencyList[vertex] = [];
            }
            addEdge(vertex1, vertex2, weight) {
                this.adjacencyList[vertex1].push({ node: vertex2, weight });
                this.adjacencyList[vertex2].push({ node: vertex1, weight });
            }

            
            Dijkstra(start, finish) {
                const nodes = new PriorityQueue();
                const distances = {};
                const previous = {};
                var mindist;
                let path = []; //to return at end
                let smallest;
                //build up initial state
                for (let vertex in this.adjacencyList) {
                if (vertex === start) {
                    distances[vertex] = 0;
                    nodes.enqueue(vertex, 0);
                } else {
                    distances[vertex] = Infinity;
                    nodes.enqueue(vertex, Infinity);
                }
                previous[vertex] = null;
                }
                // as long as there is something to visit
                while (nodes.values.length) {
                smallest = nodes.dequeue().val;
                if (smallest === finish) {
                    //WE ARE DONE
                    //BUILD UP PATH TO RETURN AT END
                    while (previous[smallest]) {
                    path.push(smallest);
                    smallest = previous[smallest];
                    }
                    break;
                }
                if (smallest || distances[smallest] !== Infinity) {
                    for (let neighbor in this.adjacencyList[smallest]) {
                    //find neighboring node
                    let nextNode = this.adjacencyList[smallest][neighbor];
                    //calculate new distance to neighboring node
                    let candidate = distances[smallest] + nextNode.weight;
                    let nextNeighbor = nextNode.node;
                    if (candidate < distances[nextNeighbor]) {
                        //updating new smallest distance to neighbor
                        distances[nextNeighbor] = candidate;
                        //updating previous - How we got to neighbor
                        previous[nextNeighbor] = smallest;
                        //enqueue in priority queue with new priority
                        nodes.enqueue(nextNeighbor, candidate);
                    }
                    mindist = distances[nextNeighbor];
                    
                    }
                }
                }
                document.getElementById("mindist").innerHTML = "Total distance is = "+mindist+" km"   ;
                return path.concat(smallest).reverse();
            }
            }



          

            var graph = new WeightedGraph();
            graph.addVertex("Kushtia");
            graph.addVertex("Jhenaidah");
            graph.addVertex("Jashore");
            graph.addVertex("Satkhira");
            graph.addVertex("Khulna");
           

            graph.addEdge("Kushtia", "Jhenaidah", 45);
            graph.addEdge("Jhenaidah", "Jashore", 47);
            graph.addEdge("Jashore", "Satkhira", 75);
            graph.addEdge("Jashore", "Khulna", 65);
            graph.addEdge("Satkhira", "Khulna", 60);
          

            result = graph.Dijkstra(cloc, dloc);

            resultString = "";
            for (let i = 0; i<result.length-1; i++) {
                resultString = resultString + result[i] + " --> "
            }
            resultString = resultString + result[result.length-1]
            // console.log(resultString);

            document.getElementById("pathprint").innerHTML = "<h1>Your path is</h1> <br>"+resultString   ;
            






        }

        





        
    </script>
</body>
</html>