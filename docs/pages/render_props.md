# Render Prop Components

The term "Render Prop" refers to a simple technique for sharing code between React components using a prop whose value is a function.

__YourComponent.jsx__ 
```javascript
<DataProvider render={data => (
  <h1>Hello {data.target}</h1>
)}/>
```

They are created by enabling a component to accepts a function prop that it will use to render its children. 
This allows the component to provide a closure for its children as well as some behaviour and new data.
Also;

- It declares false hierarchies ie. pyramid of doom.
- Encourages passing inline functions to child components which if not checked can lead to performance problems.
- Create confusing closure structures which should actually be inline.
- Leads to very verbose component JSX

[Back <= e2e](./e2e.html)
[^ Home](../index.html)
