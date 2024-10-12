const btnValidated = document.querySelector('.btn-validated')
const btnRejected = document.querySelector('.btn-rejected')
const divReview = document.querySelector('.card-content-review')



async function updateReview(status, event){
    event.preventDefault()
    console.log('test')
    await fetch(`http://127.0.0.1:8000/api/admin/zoo/reviews/edit/${divReview.dataset.id}`, {
        method: "PATCH",
        headers: {
            "Content-Type": "application/json",
            "Accept": "application/json",
            "X-CSRF-TOKEN": document.querySelector('input[name="_token"]').value
        },
        body: JSON.stringify({
            status: status
        }),
    })
}

btnRejected.addEventListener(
    'click',
    (e) => updateReview(e, 'rejected')
)

btnValidated.addEventListener(
    'click',
    (e) => updateReview(e, 'validated')
)
