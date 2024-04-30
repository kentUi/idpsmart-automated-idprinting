// Get the image element
var image = document.getElementById("image");

// Variables to store mouse position and initial image size
var offsetX, offsetY;
var initialWidth, initialHeight;

// Function to handle mouse down event
function handleMouseDown(e) {
  // Get the current mouse position
  offsetX = e.clientX - image.offsetLeft;
  offsetY = e.clientY - image.offsetTop;

  // Get the initial image size
  initialWidth = image.offsetWidth;
  initialHeight = image.offsetHeight;

  // Attach event listeners to handle mouse move and mouse up events
  document.addEventListener("mousemove", handleMouseMove);
  document.addEventListener("mouseup", handleMouseUp);
}

// Function to handle mouse move event
function handleMouseMove(e) {
  // Calculate the new image position
  var newLeft = e.clientX - offsetX;
  var newTop = e.clientY - offsetY;

  // Update the image position
  image.style.left = newLeft + "px";
  image.style.top = newTop + "px";
}

// Function to handle mouse up event
function handleMouseUp() {
  // Remove event listeners
  document.removeEventListener("mousemove", handleMouseMove);
  document.removeEventListener("mouseup", handleMouseUp);

  // Get the final position of the image
  var finalLeft = parseInt(image.style.left);
  var finalTop = parseInt(image.style.top);
  console.log("Final position - Left:", finalLeft, "Top:", finalTop);
}

// Function to handle mouse down event on the resize handle
function handleResizeMouseDown(e) {
  // Prevent default behavior to avoid text selection
  e.preventDefault();

  // Store initial mouse position
  offsetX = e.clientX;
  offsetY = e.clientY;

  // Store initial image size
  initialWidth = image.offsetWidth;
  initialHeight = image.offsetHeight;

  // Attach event listeners to handle mouse move and mouse up events for resizing
  document.addEventListener("mousemove", handleResizeMouseMove);
  document.addEventListener("mouseup", handleResizeMouseUp);
}

// Function to handle mouse move event for resizing
function handleResizeMouseMove(e) {
  // Calculate the mouse movement
  var deltaX = e.clientX - offsetX;
  var deltaY = e.clientY - offsetY;

  // Calculate the new image size
  var newWidth = initialWidth + deltaX;
  var newHeight = initialHeight + deltaY;

  // Update the image size
  image.style.width = newWidth + "px";
  image.style.height = newHeight + "px";
}

// Function to handle mouse up event for resizing
function handleResizeMouseUp() {
  // Remove event listeners for resizing
  document.removeEventListener("mousemove", handleResizeMouseMove);
  document.removeEventListener("mouseup", handleResizeMouseUp);
}

// Attach event listener to handle mouse down event on the image
image.addEventListener("mousedown", handleMouseDown);

// Resize handle element (you can replace this with your own resize handle)
var resizeHandle = document.getElementById("resizeHandle");

// Attach event listener to handle mouse down event on the resize handle
resizeHandle.addEventListener("mousedown", handleResizeMouseDown);
