package main

import (
	"fmt"
	"time"
)

/* import "net/http"

func main() {
	http.HandleFunc("/", func(w http.ResponseWriter, r *http.Request) {
		w.Write([]byte("Hello World"))
	})
	http.ListenAndServe(":3000", nil)
} */

func worker(workerID int, data chan int) {
	for x := range data {
		fmt.Printf("worker %d recebeu %d\n", workerID, x)
		time.Sleep(time.Second)
	}

}

func main() {
	canal := make(chan int)
	/* go worker(1, canal)
	go worker(2, canal) */
	qtdWorkers := 1000

	for i := range qtdWorkers {
		go worker(i, canal)
	}

	for i := range 10000 {
		canal <- i
	}
	/* for i := 0; i <= 9; i++ {
		canal <- i
	} */

}
