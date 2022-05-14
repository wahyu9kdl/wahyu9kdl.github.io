# Codevolutions React Tutorial

## 1. Introduction

* In this series we will start from scratch and learn different concepts of react
* In this video we will talk about what is react, why we should learn react & future content

* We also will go over the prerequisites of what to learn react

### What is React?

* It is an open source javascript library for building user interfaces
* React is a Javascript library and is **not a framework**
* It focuses on one thing and doing one thing really well, **building user interfaces**
* It does not focus on routing or http requests
* React has a rich ecosystem and plays well off other libraries to build full fledged applications

### Why learn React?

* React is a project created and maintained by facebook, as such it's got a huge backing and has money & resources for the project to be kept alive
* It has more than 100k stars on github
* Additionally it has a huge community
* Also from a stackoverflow survey, it is one of the most used libraries and is one of the most in demand skillsets right now

### Component Based Architecture

* React uses a componennt based architecture, this bascially breaks down a website into component based parts which is great for encapsulation
* I.e a traditional website can be broken down into
![picture 1](../images/2eaa9bde81ffad1d2367441e9ce3a000bc63102c61ed6c4f02b03440675596dc.png)  

### Reusable Code

* Components also allow reusable code
* I.e we can make a react component for articles
* We can then use this article for a react, angular and vue article after the fact
* Especially for enterprise solutions this is a huge benefit

### React is declarative

* We just tell react what we want and react through the REACTDOM will build the UI
* This is a declarative paradigm, which alternative to the imperative paradigm is where we do it line by line
* I.e we go to an artist and tell them what has to be done, whilst we would tell a 5 year old child what to do, which we'd say instruction by instruction.
* React helps to abstract away the complicated parts
* React will handle efficentvely updating and rendering of the components
* DOM updates are also handled gracefully in react

### More on why React?

* React seamlessly intergrates react into any of your applications
* A small sub-section or the entire application can be done into react
* Additionally once getting familar with react, we can venture into mobile applications through react-native

### Prerequisites

* HTML, CSS & JavaScript fundamentals are necessary
* ES6 is also mandatory
* JavaScript - 'this' keyword, filter, map and reduce
* ES6 - let & const, arrow functions, template literals, default parameters, object literals, rest and spread operators, destructuring assignments
* We will be learning react from scratch

### Guideline

![picture 2](../images/11c3854403bb4bf5145c07612bb70d90a505373d6758ca7abc63efd5a38e512e.png)  

## 2. Hello World

* We will start this by making our development environment, to start we first need two things:
  * Node
  * Visual Studio Code
* To create a new react application we will be making use of `Create React App`
  * This is great as we can quickly generate the template files for a react application by running a command
  * In VSC run the command
  ```
  npx create-react-app nameOfProject --template typescript
  npm start (alternatively yarn start in wsm which is a lot faster)
  ```
* To edit the project, go to the App.tsx file and change the content
  * For now we will change the text to now say `Hello World!`
* When the changes are made the react project will automatically update the items

* Before the next video, we will also show an alternative method of creating a react project
    * In the first method we used npx, which is a npm package runner
    * There is also a slightly different mode which is through the npm, we could install the npm package globally and run it through create-react-app
    ```
    npm install create-react-app -g
    create-react-app <project name>
    ```

## 3. Folder Structure

* In this video we will be talking about the root structure of the program
![picture 3](../images/aaaa17cb0bb3e9991a637d9018f34e2a532769ad683475922420f29ab9106eb6.png)  

  * **package.json** - Contains the key files, dependencies and the scripts to run the react project
  * **package-lock.json** - Depending on our package manager we have package-lock for our yarn files.
  * **node_modules** - This is our folder for where all our dependencies are installed
  * **public** - This is our public folder which contains the public info
    * **manifest.json** - this is for progressive web-apps which is out of scope
    * **favicon.ico** - this is the main icon of the app
    * **index.html** - This index.html file is the only html file in our application, we are building single page application and this is it. The view may change dynamically on our browser but this is what turns up
      * We typically won't add any code in this project, maybe in the head but not iin the body
      * We have one div, where id="root", in runtime our react app takeovers the div which makes up our ui
    * **src** - This is our main folder which the majority of our application is going to be developed on.
      * **index.tsx** - This contains our "main" application which takes over the main-component of the root div, through the DOM
      * **app.tsx** - This is the root component that is rendered via index.tsx which is rendered on the html file. The app component is the view which we see on our view browser
      * **app.css** - This is a css file for styling
      * **App.test.tsx** - This is a file for simplistic unit tests

* When we run the command `yarn start`
  * Index.html file is served in the browser
  * Index.html contains the root DOM node
  * Next index.tsx renders the root component of the dom node
  * App.tsx contains the components to be rendered in index.tsx

## 4. Components

* In react, a component represents a part of the user interface
* Going back to the earlier example in the previous video, we can say our website has 5 components
  * Root component
    * Header
    * Sidenav
    * Main content
    * Footer
* Components are also reusable
  * The same components can be used with different properties to display differently i.e the left sidenav can be just a sidenav so it can also become a right sidenav

### Components In Code

* A component code is usually placed in a typescript folder
* I.e the AppComponent files are placed in the App.tsx files
* What does the code look like?
  * This depends on the type of the component

### Component Types

* In React there are two component types:
  * Stateless Functional Component
  * Stateful Class Components

* Functional components are JavaScript functions that return html files that describes the UI
  * ![picture 4](../images/687efd2b074cf83f5297feb70af4952e27c3ca7e9ff970318907f21479c83b67.png)

* Class Components alternatively extend from the component class from the react library.
  * They must contain a render method that contain the return of html
  *  ![picture 5](../images/97e6402941368bf851257fd7cb71b7d0d9b00fe2539cf47418566022d88ab988.png)  

## 5. Functional Components

* Functional components are just javascript function
  * They can also take an optional object of properties (which is called props)
  * They output a HTML file called JSX / TSX
* This is pretty much a typescript function that takes in props and outputs a html file
![picture 6](../images/7eba5cd7484f820826ac999d8d2d43524d32d37ef51b01e54cf3abf0f8161ea9.png)  

### Making A Functional Component

* In the app component we will remove all the html excluding the main `div` tag
* We will now create a functional component that will say `Hello Shaan`
* Make a new file called `Components/Greet.tsx`

```tsx
import React from 'React';

let Greet = () => {
    return (<div>Hello Shaan Khan</div>);
};

export default Greet;
```

* From this we can then import the functional component into `App.tsx` by

```tsx
import Greet from './Components/Greet.tsx';

<Greet/>
```

* We can see that it now appears in our program
* One additional important thing about exporting / importing
  * See we are exporting it as a default, now this is how we are able to import it with any name
  * If we weren't we would have to use a thing called Aliasing

```tsx
export const Greet = () => ();
```

```tsx
import {Greet} from './Components/Greet.tsx'
```

# 6. Class Components

* Class components are like ES6 classes
* Similar to Components, they also take props as an input and return html
* Additionally these can also contain a private internal state, i.e contain some information that is private to this UI and allows it to contain some private state to relay to the user interface
* We will now make the same greet component but now as a class component
* When we make a class component, unlike functional components we need two imports
  
```tsx
import React, { Component } from "react";

class Welcome extends Component {
  render() {
    return <h1>Hello World</h1>;
  }
}

export default Welcome;
```

* This works like a normal functional component, instead of using a function we instead return a Welcome class which **extends component**.
* This additionally needs the interface `render()` implemented which returns the html

### Class Components vs Functional Components

#### Functional

* Functional components are simple functions which takes in props and returns a declaration
* We should try using a functional component as much as possible (if possible to do functional compared to class components choose functional)
* The benefit is we have the absence of the `this` keyword
* Additionally we are forced of doing a solution without using state, state whilst a good advanced concept is hard for beginners
* Functional components are mainly responsible for the UI
* This is why functional components are called Stateless / Dumb / Presentational components

#### Class Components

* These are more feature rich
* They maintain their own private data, ccalled states
* They can facilitate complex UI logic
* These provide a thing called **lifecycle hooks**
* These components are also called Stateful / Smart / Container

## 7. Hook Updates

* This cool new feature which updated contradicts what we learnt about functional vs state components
* We mentioned that class components have the benefit of a thing called state / lifecycle hosts, we also mentioned functional components as stateless components.
* We now have a thing called hooks, which are a new feature that lets you use state and other react features without using a class

## 8. JSX

* JSX / TSX is a word going to be told a lot in the word of react
* Javascript XML (JSX) is an extension to the JavaScript language syntax.
* This allows us to write XML-like code for elements and components
* JSX has tags and have a tag name, attributes and children
* Whilst it isn't a necessitiy to code a react tutorial, JSX makes our code simpler and elegant
* JSX ultimately transpiles into pure JS which is understood by browsers

* We will now show you a react component coded in JSX and one made without JSX

### Hello.tsx

```tsx
import React from 'react'

const Hello = () => {
    return (
        <div>
            <h1>Hello Shaan</h1>
        </div>
    );
}

export default Hello;
```

### Hello.ts

```ts
import React from 'react'

const Hello = () => {
    return React.createElement('div', null, React.createElement('h1', null, 'Hello Shaan'));
};

export default Hello;
```

* As we can see this is a lot more annoying
* React.createElement renders it, we use div, null the second term and then the thing being displayed
* The null / second one is the key-value pair, we get id="hello" if we replace null with hello
  ```ts
  {id: 'Hello', className: 'World'}
  ```

### JSX Differences

* Class -> className
* for -> htmlFor
* camelCase property naming conventions
  * onclick -> onClick
  * tabindex -> tabIndex

## 9. Props

* In the video about components, we said components are reusable
* For example lets say we need to reuse the greet component, we just have to remention the greet tab component another time
* If we wanted to make this component more generic, we need to make a way to allow the component to take an argument to display a different name

* This is where react properties or props come into play, it also allows the component to be dynamic
  * Our intention is to parse a name in the react component and display that name in the browser
  * To specify a name property to the prop we add an attribute
```tsx
<GreetProp name = "John Doe"/>
```

```tsx
import React from "react";

let WelcomeProp: React.FC<{ name: string }> = (props) => {
  console.log(props);
  return (
    <div>
      <h1>Hello {props.name}</h1>
    </div>
  );
};

export default WelcomeProp;
```

* As we can see when we print props we see it returns an object which contains props.name as the name, by adding the :React.FC we just explicitly type it in react

* Additionally react in TSX typically evaluates all words as text unless we use curly braces, which flips the code from html to JS

* Sometimes it also possible we don't have an idea of what data will be rendered in, we can do this by putting the data inside of the open and closing tags of the object and retriving the inside data via the props.children

```tsx
<GreetProp name="Hero man">
    <p>This is children prop</p>
</GreetProp>
```

```tsx
import React from "react";

let WelcomeProp: React.FC<{ name: string }> = (props) => {
  console.log(props);
  return (
    <div>
      <h1>Hello {props.name}</h1>
      {props.children}
    </div>
  );
};

export default WelcomeProp;
```

* Also be aware that TSX can only return a single parent element, so it needs to be wrapped

* Now we will repeat the same thing using a class component

```tsx
import React, { Component} from 'react'

class Welcome extends Component {
    render() {
        return <h1>Welcome {this.props.name}</h1>
    }
}

export default Welcome
```

* Basically to access the props component on a class component we need to use the `this` keyword

* There is one significant thing about props however, **props are immutable i.e they cannot be changed again, they cannot be changed they are read only**

## 10. State

* In this video we will be talking about component state in react
* As we have seen all components return TSX which renders the user interface
* We have seen we can influence what gets rendered via props
* Additionally there is a second way to render things which is via the state of the component

### Props vs State

![picture 1](../images/b1fbe7baabe109dae14eaf62749e9eeb2d1d5e760d32f32a2372e75b75a2a84b.png)  

* Props get passed to the component
* Similar to function parameters
* Props are immutable and therefore are read only
* props can be accessed via the props parameter
```tsx
props - Functional components
this.props - Class components
```

* State is managed within the component
* Similar to variables declared in the function body
```tsx
useState // Hook - functional components
this.state // Class components
```

### State Example

* We will start by making a new class component called `message.tsx`
* We need to make a new requirement, which is add a subscribe button underneath the text, and once the button is pressed we need to change the text from `Welcome visitor` to `Thank you for subscribing`
* We can't set it via props as it is immutable
* As such the solution is to use component states

* The first step is to create a state object and initalize it, this is normally done within the classes constructor
  * We call the super method, because we extend the react component class and we need to call the base class constructor
  * We then access the `this.state` object and initalize the property
  * Now we need to bind this state value to the render function
  * Now lets create a button which onclick will change the message
  * We now make a function that uses the `this.setState` method to then update the message string isnide of the state object.

```tsx
import React, { Component } from "react";

class Message extends Component {
  state = {
    message: "Welcome Visitor!",
  };

  changeMessage() {
    this.setState({
      message: "Thank You For Subscribing!",
    });
  }

  render() {
    return (
      <div>
        <h1>{this.state.message}</h1>
        <button
          onClick={() => {
            this.changeMessage();
          }}
        >
          Subscribe
        </button>
      </div>
    );
  }
}

export default Message;
```

* States are nothing but objects that are priviately maintained within the components
* These states are mutable or can be changed after being assigned unlike properties

## 11. State & The setState Method

* To help us understand the **dos and don'ts** of useStates, we will be making a counter component
* We will make a new component called `Counter.tsx`
* React snippets allows us to type `rce` and make a react class component
* If we try to change the value of the state directly without using the useState method, the object value updates however the page is not reloaded
  * This is why we should never modify the state directly

```tsx
    this.setState(
      {
        count: this.state.count + 1,
      },
      () => {
        console.log(`Callback value`, this.state.count);
      }
    );

    console.log(this.state.count);
  }
```

* There is one detail to observe with setState, in the browser we can see when we increment, the value is 1, however in the console the value is 0
  * The console is 1 less than the log
  * This is because the calls are asynchronous, this means `console.log` gets called before the state is actually set
  * Occassionally we want to run code when the state has been set, to do this we can pass a callback function to the callback parameter for the `setState` method
  * So the `setState` method has two parameters:
    * The `data` / assignment of the function
    * The `callbackmethod` of the function

* Whenever you need to run code after the value has been changed, don't put it in the code after the setState method, instead put it in a **callback method**
* Next scenario, if we try to use the current state to calculate the new state value, the code works as expected with no problems, this is because the current scenario is pretty simple
  * What happens if we make this more complicated?
  * If we make a new function called increment5 and call the increment method 5 times, what happens?
    * We get 5 0s with the final value being output of 1
    * This is because the property is not updated so it does the same operator multiple times
    * React usually groups multiple setstate calls for better performance
    * So in this case, it does all of them in one go and the updated value does not carry over
* A solution to this is pass the function as an argument, instead of passing in an object
```tsx
    this.setState((prevState) => ({
      count: prevState.count + 1,
    }));
```
* This will send it individually
* The console.log however is synchronous and will provide 0s
* If we need to update the state based on the previous state and it gets complicated pass the previous state as an object
* The second parameter to this method is the props object as well

### Conclusions

* Always make use of setState and never modify the state directly
* The code has to be executed after the state has been updated? Place that code in a call back method
* When you have to update the state based on the previous state, pass the in the function as an argument instead of a regular object.

## 12. Destructuring Props & State In React

* Destructuring is a ES6 feature which makes it possible to unpack values in arrays or properties into objects into distinct variables
* This in react improves code readability

### Functional Components

* Lets start with functional components, earlier in the series we made a functional component called `Greet`
  * We made a property name and hero name via props
  * There are two ways of destructuing a class component:
    * We can destructure it in a functional component via the function parameter itself
```tsx
  import React from "react";

const GreetDestructured = ({ name, heroName }) => {
  return (
    <div>
      <h1>
        Hello {name} aka {heroName}
      </h1>
    </div>
  );
};

export default GreetDestructured;
```

  * Alternatively we can destructure it inside of the body
```tsx
const GreetDestructured: React.FC<{ name: string; heroName: string }> = (
  props
) => {
  const { name, heroName } = props;
```

### Class Components

* We will now see how to do this for class components
* In class components we typically destructure elements inside of the render method
```tsx
class DestructuringWelcome extends Component<{
  name: string;
  heroName: string;
}> {
  render() {
    const { name, heroName } = this.props;
    return <div></div>;
  }
}
```
* To destructure states in class components we do

```tsx
const {state1, state2} = this.state;
```

## 13. Event Handling

* Any web application we make typically has user interaction
* When the user interacts with our applications events are fired, examples include:
  * Mouseclick
  * Mouse over
  * Key press
  * Change event
  * And so on
* The application must handle these events and execute the following code
* In this application we will be focusing on the click event, but this works with other events as well

### Starting With Functional Components

* Make a new file called `FunctionClick.tsx`
* When the user clicks the button, the clickevent button is fired
* Our goal is to capture that event and execute some basic code
* React events are named using **camelCase** rather than lowercase
* JSX passes the function as the event handler, rather than string
* If we then make a function called `ButtonClicked` and then set it to `onClick` we will run it

### Common Mistakes With Events

* We passed the function as the event handler with the **absence of parenthesis** if we run it without the parenthesis it is a **function** and not a **function call**
  * This means it will run the code instead of being an event
* This scenario becomes even worse with class components as it will rerender the component and cause an infinite loop
* This is a function, not a function call

### Starting With Class Components

* We do the same thing, but we have to be mindful about the `this` keyword

## 14. Binding Event Handlers

* In this video we will learn how to bind components to event handlers
* The reason we bind event handlers in react is purely the way the `this` keyword works in JavaScript not because of react
  * It is good to research how the `this` keyword works in JavaScript
* In this video we want to change the message of the component state on button click

### EventBinding

* First create a new file called `ReactBind.tsx`
* Make this a class component
* Now make a button for it
* Now add a state property and bind it to the user interface, we will make this variable called `Greet` with default value `Hello` and make it change to `Goodbye` when clicked
* If we just add a `setState` function inside of the button the event breaks, we get an error saying we cannot read property of undefined
* If we log the `this` keyword inside the **event handler** it is undefined
  * This is a specific weird behavior of javascript
* **this** keyword is usually undefined in an event handler, and this is why event binding is necessary in react class components

### How to bind event handlers in React

* There are multiple ways to do it in React, in this video we will go through all of them
  * The first method is to use the `bind` keyword and bind the handler to the render method:
    * Although this works perfectly fine every update to the state will cause the component to re-render, which will generate a new event handler on each render
    * Even though not severe in small applications this can become laggy for nested children components
  
```tsx
        <button onClick={this.clickHandler.bind(this)}>Click Me!</button>
```
  * The second approach is to use arrow functions in the render method:
    * Also note we are calling this as a function and returning that value, which is why parenthesis is required in this approach
    * Similar to the first approach, this has performance implications in some scenarios
  
```tsx
        <button onClick={() => this.clickHandler()>Click</button>
```
 
  * The third approach, which is normally used in most cases, and is also used in the official react documentation. This deals with binding the event handler in the constructor opposed to the render method
    * Because the binding happens once in the constructor, this is better than having it in the render method

```tsx
  constructor(props) {
    super(props);
    this.clickHandler = this.clickHandler.bind(this);
}
```

  * The final approach is to use an arrow function as a class property
  * 
```tsx
  clickHandler = () => {
    this.setState({
      message: "Goodbye",
    });
  };
  ```

### Summary

* The first approach is poor for performance implications
* The second approach is probably the most easy way, involving parameters, this is viable if we don't require rendering sub-items
* React documentation supports approach number 3 or approach number 4
* Approach number 4 is most likely best practice

## 15. Methods As Props

* In the earlier videos we saw how a parent component can pass down props to its children components
* We can pass it down via props to the children components
* What if the child component wants to communicate with the parent component?
  * Strangely we still use props
  * This time we however use a reference to a method as props to the child component

### Doing This

* Make a new component called `ParentComponent.tsx`
* This will contain a `constructor` which contains a `state` as well as a `eventhandler` called `greetparent` which is binded in the constructor
* We will also make another sub-component called `ChildComponent.tsx`
* What we want to occur is when we click the `button` in the child component, we want to execute a function in the `parent component`
* We do this by passing a prop to the child class as a handler

```tsx
        <ChildComponent greetHandler={this.greetParent}/>
```

```tsx
import React from "react";

let ChildComponent: React.FC<{ greetHandler: () => void }> = (props) => {
  return <button onClick={props.greetHandler}>Greet Parent</button>;
};

export default ChildComponent;
```

* We have sucessfully called a method from the parent component from the child component by calling it from props method

### Passing A Parameter When Calling A Method As A Child Component

* This is where an arrow function in the parameter becomes very useful
* Arrow functions are the simplest way to do this
* Lets convert the `onClick` handler to an arrow function
```tsx
<button onClick={() => props.greetHandler('child')}>Button</button>
```

* Now in greetParent we will now add a parameter called childname

```tsx
greetParent(childName) {
  console.log(`Hello ${childName}`);
}
```

## 16. Conditional Rendering

* When we are building react applications we often may need to show or hide html based on a certian conditons
* Thankfully they work similar to how they do in JavaScript
* There are 4 ways of doing this:
  * If/else
  * Element variables
  * Tenary conditional operators
  * Short circuit operators

### If/Else Approach

* First we will make a new file called `UserGreeting.tsx`
* Within the file we will make a class component

```tsx
  if (this.state.isLoggedIn) {
      return <div>Welcome Shaan</div>;
    } else {
      return <div>Welcome Guest</div>;
    }
```

* If-else statements don't work within JSX, JSX is syntaxtic sugar which allows function calls and object construction

### Element Variables

* In this approach we use javascript variables to store elements
* This assists in us being able to conditionally render part of the element or the entire element

```tsx

    let message;

    if(this.state.isLoggedIn) {
        message = <div>Welcome Shaan</div>
    }
    else {
        message = <div>Welcome Guest</div>
    }

    return (<div>{message}</div>);
```

* Message stores the element to be rendered
* This looks much better however tenary operators are much more simpler

### Tenary Operators

* The tenary operator is great as it can be used within the TSX

```tsx
    return(
        this.state.isLoggedIn ? (<div>Welcome Shaan</div>) : (<div>Welcome Guest</div>)
    );
```

### Short Circuit Operator Approach

* This is a specific case of the tenary operator approach
* This is done if we want to render something or nothing at all

```tsx
    return (
        this.state.isLoggedIn && (<div>Welcome Shaan</div>);
    );
```

* If the left side is true, it also evaluates the right hand side which is the JSX
* However if the left hand side evaluates to false the right hand side wont be evaluated either

## 17. List Rendering

* When you build web-application a common application is displaying a list of items
* What we want to do is repeat a bunch of HTML for a list
* One of the best thing about react, is that it relies heavily on the typescript library itself to represent data
* The best way to do this is with the `.map` method which will remap it to another array to return
  * The `map()` method creates a new array with the results of calling a previous function with the new array
```ts
var array1 = [1, 4, 9, 16];
const map1 = array1.map(x => x*2);

console.log(map1);
// Expected output: Array [2, 8, 18, 32]
```

* This is pretty much the knowledge of list rendering in react, but instead of multiplication we do JSX
* We do this by using the map method inside of the jsx

```tsx
 <div>
      {names.map((name) => (
        <h1>{name}</h1>
      ))}
    </div>
  ```

* We can also simplify it by doing the render outside of it and then only printing out the nameList in the TSX

```tsx
const names = [...];

const nameList = names.map(name => <h2>{name}</h2>)
return <div>{nameList}</div>
```

* Typically we may have a list of objects, with a few properties that have to be rendered
  * In such cases its probably best to refactor the JSX into seperate components and then use the component in the map render TSX

* I.e replacing names array with array of person, with id, name, age and skill

```tsx
  const personList = persons.map((person) => (
    <h2>
      I am {person.name}, I am {person.age}. I know {person.skill}
    </h2>
  ));
```

* Whilst this does work, the prefered way is to make this a seperate component

### Making this a seperate component

* Make a new file called `Person.tsx`
* We pass the data down via props via the list

```tsx
import React from "react";

interface Person {
  id: number;
  name: string;
  age: number;
  skill: string;
}

let Person: React.FC<{ persons: Person[] }> = (props) => {
  const personList = props.persons.map((person) => (
    <h2>
      I am {person.name}, I am {person.age}. I know {person.skill}
    </h2>
  ));

  return <div>{personList}</div>;
};

export default Person;
```

* This also shows a warning, where each element in the array needs a unique key prop **THIS NEEDS TO BE DONE OTHERWISE IT WILL HAVE WEIRD CHARACTERISTICS**

## 18. List & Keys

* In this video we will be talking about Lists & Keys in React
* In the last video, we saw when we render a list of items, react throws a warning in the console
* Each child in an array or iterator should have a unique "key" prop
* If we add value={person.id} we will see that we have no errors with our browser

* The key prop value not be ID all the time, it can be the name, it can be anything as long as it is unique within the list
* An important point to keep in mind is that they are not accessable within the key components
  * If we try to destructure the key prop, it is not defined. Key is not a prop
  * If you need to access it try to parse it as a different prop

* A "key" is a special string attribute you need when creating a list of elements
* Key give the element a stable identity
* Keys help React identify which items have changed, are added or removed
* Helps in efficient updates of user interfaces
