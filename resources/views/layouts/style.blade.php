<style>
body{
    padding: 0vw 5vw;
}
.product-table {
    width: 100%;
    border-collapse: collapse;
    margin: 20px;
}

.product-table th, .product-table td {
    border: 1px solid #ddd; 
    padding: 12px;
}

.product-table th {
    background-color: #002df5;
    color: white;
}

.product-table tr:nth-child(even) {
    background-color: #f2f2f2;
}

.product-table tr:hover {
    background-color: #ddd;
}

.view-mode {
    display: block;
}

.edit-mode {
    display: none;
    width: 100%;
    padding: 5vw 5vw 5vw 5vw;
    box-sizing: border-box;
}
.edit-button{
    background-color: #4287f5;
}
.delete-button{
    background-color: #f51000;
}
.detail-button,
.edit-button,
.save-button,
.cancel-button,
.delete-button {
    margin-top: 10px;
    color: white;
    border: none;
    padding: 10px 15px;
    cursor: pointer;
    margin-right: 5px;
    border-radius: 4px;
    text-decoration: none;
}

.detail-button:hover,
.edit-button:hover,
.save-button:hover,
.cancel-button:hover,
.delete-button:hover {
    background-color: #45a049;
}

.detail-button a {
    color: white;
    text-decoration: none;
}


.input-field {
    width: 60%;
    padding: 8px;
    margin: 6px 0 12px 0;
    box-sizing: border-box;
    border: 1px solid #ccc;
    border-radius: 4px;
    font-size: 16px;
}

.submit-button {
    width: 60%;
    background-color: #4caf50;
    color: white;
    padding: 10px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    font-size: 18px;
}

.submit-button:hover {
    background-color: #45a049;
}

#toggleButton {
        background-color: #4CAF50;
        border: none;
        color: white;
        padding: 10px 20px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
        margin: 10px;
        cursor: pointer;
        border-radius: 5px;
    }

    #toggleButton:hover {
        background-color: #45a049;
    }

</style>