const form = document.querySelector('.form')

async function handleSubmit(event){
    event.preventDefault()
    const reviewData = Object.fromEntries(new FormData(form))
    console.log(reviewData)
    await fetch("http://127.0.0.1:8000/api/admin/zoo/reviews/create", {
        method: "POST",
        headers: {
            "Content-Type": "application/json",
            "Accept": "application/json",
            "X-CSRF-TOKEN": document.querySelector('input[name="_token"]').value
        },
        body: JSON.stringify(reviewData)
    })

}

form.addEventListener('submit', handleSubmit)
