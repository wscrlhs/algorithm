package main

import "fmt"



func less(v,w int) bool {
	return v<w
}

func exch(a []*int,i,j int){
	tmp:= a[i]
	a[i]=a[j]
	a[j]=tmp
}

func show(a []int){
	for i:= range a{
		fmt.Println(a[i])
	}
}


func isSorted(a []int) bool{
	n:= len(a)
	for i:=1;i<n;i++{
		if less(a[i],a[i-1]{
			return false
		}
	}
	return true
}




func main() {
	fmt.Println("vim-go")
}
