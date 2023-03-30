const list_des_room=document.querySelectorAll(".list-living-room .living-room-items img")
console.log(list_des_room)
list_des_room.forEach(items=>{
    items.addEventListener("click",e=>{
        const a=document.createElement("a")
        a.href="./room-detail.php"
        a.click()
    })
})