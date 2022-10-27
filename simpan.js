const Card = (props) =>{
  return (
    <div class="card">
      <p class="title">{props.name}</p>
      <p>{props.job}</p>
      </div>
    ) 
      
  }
const App=()=>{
 return (
   <div>
   <Card name="Abdurrahim Mahbub" job="Frontend Developer"/>
   <Card name="Husein Haikal" job="Backend Developer "/>
   <Card name="Hayabusa" job="Data Science"/>
   </div>
   
 ) 
}
ReactDOM.render(<App/>,document.querySelector('#root')) 